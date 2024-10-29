<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\file;
use App\Models\product;
use App\Models\category;
use App\Models\team;
use App\Models\feedback;
use App\Models\offer;
use App\Models\info;
use App\Models\seller;
use App\Models\CustomerAddress;
use App\Models\order;
use App\Models\orderitem;
use App\Models\cart;

use Illuminate\Support\Facades\Validator;

class cardcontroller extends Controller
{
    function single($id){
        $cartitem=cart::count();
        $data = product::find($id);
        $offer=offer::all();
        return view('single',compact('offer','data','cartitem'));
    }

    function stationary(){
        $cartitem=cart::count();
        $offer=offer::all();
       $data=product::all()->where('category_id','5');
               return view('stationary',compact('data','offer','cartitem'));
     
}

function cc(){
    $cartitem=cart::count();
    $offer=offer::all(); 
  
           return view('coupan',compact('offer','cartitem'));
 
}


function welcome(){
    $cartitem=cart::count();
    $dataadmin=product::count();
    $datasell=seller::count();
    $datafeed=feedback::count();
    $feedback=feedback::all();
    $data=product::select('*')->take('8')->get();
    $datad=product::latest()->take('8')->get();
    $offer=offer::all();
            return view('welcome',compact('data','feedback','offer','datad','cartitem','dataadmin','datasell','datafeed'));
           
}

 function master(){
    $cartitem=cart::count();
    $offer=offer::all();
             return view('masterlayout',compact('offer','cartitem'));
           
 }


function about(){
    $cartitem=cart::count();
    $data=team::all();
    $dataadmin=product::count();
    $datasell=seller::count();
    $datafeed=feedback::count();
    $offer=offer::all();
            return view('about',compact('data','offer','cartitem','dataadmin','datasell','datafeed'));
 
}
function contact(){
    $cartitem=cart::count();
    $info=info::all();
    $offer=offer::all();
            return view('contact',compact('offer','cartitem','info'));
 
}
/*  */
/* function toys(){ */
/*     $cartitem=cart::count(); */
/*     $offer=offer::all(); */
/*     $data=product::all()->where('category_id','1')->where('status',0); */
/*             return view('dolls',compact('data','offer','cartitem')); */
/*   */
/* } */

function toys() {
    $cartitem = cart::count();  // Assume this gets the count of items in the cart.
    $offer = offer::all();      // Fetch all offers.

    // Fetch products from categories 1, 3, 4, and 5
    $data = product::whereIn('category_id', [1, 6, 4, 5])
                   ->where('status', 0)
                   ->orderBy('created_at', 'desc')
                   ->get();

    return view('dolls', compact('data', 'offer', 'cartitem'));
}


function hand(){
    $cartitem=cart::count();
    $offer=offer::all();
    // $data=product::all()->where('category_id','4')->where('status',0);
            // return view('handbags',compact('data','offer','cartitem'));
            $data = product::whereIn('category_id', [10, 7, 4, 8])
               ->where('status', 0)
               ->orderBy('created_at', 'desc')
               ->get();
return view('handbags', compact('data', 'offer', 'cartitem'));
 
}
function card(){
    $cartitem=cart::count();
    $offer=offer::all();
    // $data=product::all()->where('category_id','3')->where('status',0);
            // return view('greethings',compact('data','offer','cartitem'));
            $data = product::whereIn('category_id', [9, 3, 1, 6])
               ->where('status', 0)
               ->orderBy('created_at', 'desc')
               ->get();
return view('greethings', compact('data', 'offer', 'cartitem'));
 
}
function wallet(){
    $cartitem=cart::count();
    $offer=offer::all();
    // $data=product::all()->where('category_id','6')->where('status',0);
            // return view('wallet',compact('data','offer','cartitem'));
            $data = product::whereIn('category_id', [1, 9,4 , 6])
            ->where('status', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            return view('wallet', compact('data', 'offer', 'cartitem'));
            
 
}
function art(){
    $cartitem=cart::count();
    $offer=offer::all();
    $data=product::all()->where('category_id','7')->where('status',0);
            return view('arts',compact('data','offer','cartitem'));
 
}
function beauty(){
    $cartitem=cart::count();
    $offer=offer::all();
    // $data=product::all()->where('category_id','8')->where('status',0);
            // return view('beauty',compact('data','offer','cartitem'));
            $data = product::whereIn('category_id', [5, 7,4 , 3])
            ->where('status', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            return view('beauty', compact('data', 'offer', 'cartitem'));
            
 
}
function gift(){
    $cartitem=cart::count();
    $offer=offer::all();
    // $data=product::all()->where('category_id','10')->where('status',0);
            // return view('gift',compact('data','offer','cartitem'));
            $data = product::whereIn('category_id', [3,9,4,5])
            ->where('status', 0)
            ->orderBy('created_at', 'desc')
            ->get();
            return view('gift', compact('data', 'offer', 'cartitem'));
 
}
function gift1(){
    $cartitem=cart::count();
    $offer=offer::all();
    $data=product::all()->where('category_id','11')->where('status',0);
            return view('gift',compact('data','offer','cartitem'));
 
}
function gift2(){
    $cartitem=cart::count();
    $offer=offer::all();
    $data=product::all()->where('category_id','12')->where('status',0);
            return view('gift',compact('data','offer','cartitem'));
 
}
function gift3(){
    $cartitem=cart::count();
    $offer=offer::all();
    $data=product::all()->where('category_id','13')->where('status',0);
            return view('gift',compact('data','offer','cartitem'));
 
}
function gift4(){
    $cartitem=cart::count();
    $offer=offer::all();
    $data=product::all()->where('category_id','14')->where('status',0);
            return view('gift',compact('data','offer','cartitem'));
 
}



// feedback section
function feedback(){
    $cartitem=cart::count();
    $offer=offer::all();
    return view('feedback',compact('offer','cartitem'));
}
 
function addfeedbackdata(Request $request){
    $data = new feedback();
    $data->name=$request->input('name');
    $data->email=$request->input('email');
    $data->city=$request->input('city');
    $data->fproduct=$request->input('pro');
    $data->gender=$request->input('gender');
    $data->experience=$request->input('exp');
    $data->Message=$request->input('msg');
   
 

    if($request->hasfile('image')){
       $image= $request->file('image');
       $ext=$image->getClientOriginalExtension();
       $image_name=time().".".$ext;
       $image->move('images',$image_name);
       $data->image=$image_name;

    }
    $data->save();
    return redirect('/');
}





public function addtocartitem(Request $request){
    $user = Auth::user();
    $item= new cart();
    $item->quantity=$request->input('quantity');
    $item->productid=$request->input('id');
    $item->customerid=$user->id;
    $item->save();
    return back()->with('success','successfully added in cart');
  
 }
 public function productcart(){
    $cartitem=cart::count();
    $user = Auth::user();
    $offer=offer::all();
    $cartitems=DB::table('products')
    ->join('carts','carts.productid','products.id')
    ->select('products.name','products.price','products.image','carts.*')
    ->where('carts.customerid',$user->id)
    ->get();

    return view('cart',compact('offer','cartitems','cartitem'));
}
public function deletecartitems($id){
 $item=cart::find($id);
 $item->delete();
 return back()->with('success','deleted successfully');
}


public function updatecart(Request $request){
    
    $item= cart::find($request->input('id'));
    $item->quantity=$request->input('quantity');

  
    $item->save();
    return back()->with('success',' Quantity updated successfully');
  
 }

 public function checkoutt(Request $request){
    $user = Auth::user();
        $order=new order();
        $order->status="pending";
        $order->customerid=$user->id;
        $order->bill=$request->input('bill');
        $order->firstname=$request->input('fname');
        $order->lastname=$request->input('lname');
        $order->address=$request->input('address');
        $order->email=$request->input('email');
        $order->phone=$request->input('phone');
        if($order->save()){
            $carts=cart::where('customerid',$user->id)->get();
            foreach($carts as $item)
            {
                $product=product::find($item->productid);
                $orderitem=new orderitem();
                $orderitem->productid=$item->productid;
                $orderitem->quantity=$item->quantity;
                $orderitem->price=$product->price;
                $orderitem->orderid=$order->id;
                $orderitem->save();
                $item->delete();
            }
return redirect('/vorder')->with('success','Order placed successfully');
        }
        else{

        }
        
        
 }
  
 public function productcartitems(){
    $user = Auth::user();
    $cartitems=DB::table('products')
    ->join('carts','carts.productid','products.id')
    ->select('products.name','products.price','products.image','carts.*')
    ->where('carts.customerid',$user->id)
    ->get();
    return view('cartitem',compact('cartitems'));
}

function vorder(Request $request,$id){
    $offer=offer::all();
  
    $cartitem=cart::count();
    $order=order::all()->where('id',$id);
  
 
  
    return view('vorder',compact('order','offer','cartitem'));
}

public function myorders(){
    $user = Auth::user();
    $order=order::where('customerid',$user->id)->get();
   
    $items=DB::table('products')
    ->join('orderitems','orderitems.productid','products.id')->select('products.name','products.image','orderitems.*')
    ->get();
    return view('orders',compact('order','items'));
}


 }





