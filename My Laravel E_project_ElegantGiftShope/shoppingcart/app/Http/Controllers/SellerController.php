<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\seller;
use App\Models\category;
use App\Models\product;
class SellerController extends Controller
{
    public function sellerindex(){
        return view('seller.seller_login');
    }
      public function sellerdashboard(){
        return view('seller.index');
    }
    public function prob(){
        return view('seller.problem');
    }
    public function sellerlogin(Request $request){
        $check = $request->all();
        if(Auth::guard('seller')->attempt(
            ['email' => $check['email'],
            'password' => $check['password']]
        )
        ){
            return redirect()->route('seller.prob')->with('error','seller login succesfully');
        }else{
            return back()->with('error','invalid email or passowrd');
        }
    }
    public function sellerlogout(){
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_form')->with('error','seller logout successfully');
    }
    public function sellerregister(){
        return view('seller.seller_register');
    }

    public function sellerregistercreate(Request $request){
        seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('seller.seller_login')->with('error','seller created successfully');
    }

    function addsproduct(){
        $data=category::all();
        return view('seller.addproduct',compact('data'));
        
    }
    function addproductdatas(Request $request){
        $data = new product();
        $number=mt_rand(1000000000,9999999999);
        $barcode=$request['barcode']=$number;
        if($this->barcodeexist($number)){
            $number=mt_rand(1000000000,9999999999);
        }
        $data->barcode=$barcode;
        $data->name=$request->input('name');
        $data->price=$request->input('price');
        $data->category_id=$request->input('category');
        $data->sdescription=$request->input('sdesc');
        $data->ldescription=$request->input('desc');
        $data->status=1;
        $data->user=Auth::guard('seller')->user()->email;
       
        if($request->hasfile('image')){
           $image= $request->file('image');
           $ext=$image->getClientOriginalExtension();
           $image_name=time().".".$ext;
           $image->move('images',$image_name);
           $data->image=$image_name;

        }
        $data->save();
        return back();
    }
    public function barcodeexist($number){
      return product::wherebarcode($number)->exists();
    }
    function showproducts(Request $request){
        $search=$request->input('search');
        $user=Auth::guard('seller')->user()->email;
        $query=product::query()->where('user',$user);
        if($search){
            $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%')
            ->orwhere('price','like','%' .$search. '%');
           

        }
        $data=$query->paginate(10);
        return view('seller.viewproduct',compact('data'));
    }
    function rereq($id){
        $data=product::find($id);
        $data->status=1;
        $data->save();
        return back();
    }
    function viewcategorys(Request $request){
        $search=$request->input('searchcs');
        $query=category::query();
        if($search){
            $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%');

        }
        $data=$query->paginate(3);
      
        return view('seller.viewcategory',compact('data'));
    }
  
   
}
