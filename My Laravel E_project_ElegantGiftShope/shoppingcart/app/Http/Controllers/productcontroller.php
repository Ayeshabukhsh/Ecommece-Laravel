<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\file;
use App\Models\product;
use App\Models\category;
use App\Models\seller;
use App\Models\offer;
use App\Models\cart;

class productcontroller extends Controller
{
    //  function addproduct(){
    //     $data=product::all()->where('category','stationary');
    //     return view('admin.addproduct',compact('data'));
        
    // }
    function admindash(){
        $dataadmin=product::count();
        $datasell=seller::count();
        $datacat=category::count();
         return view('admin.admindashboard',compact('dataadmin','datacat','datasell'));
        
    }
    function addproduct(){
        $data=category::all();
        return view('admin.addproduct',compact('data'));
        
    }
    function addproductdata(Request $request){
        $request->validate([
            'name'=>'required|string|min:3',
            'desc'=>'required|string|max:255',
            'sdesc'=>'required|string|max:100',
            'image'=>'required|mimes:jpg,png',
        ]);
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
       
       
        if($request->hasfile('image')){
           $image= $request->file('image');
           $ext=$image->getClientOriginalExtension();
           $image_name=time().".".$ext;
           $image->move('./images',$image_name);
           $data->image=$image_name;

        }
        $data->save();
        return back();
    }
    public function barcodeexist($number){
      return product::wherebarcode($number)->exists();
    }
    function showproduct(Request $request){
        $category=category::all(); 
        $search=$request->input('search');
        $query=product::query()->where("status",0);
        if($search){
            $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%')
            ->orwhere('price','like','%' .$search. '%');
           

        }
        $data=$query->paginate(5);
        return view('admin.viewproduct',compact('data','category'));
    }
function deleteproduct($id){
    product::destroy($id);
    return back();

}
 function update($id){
   return view('admin.productupdate');
 }
 function request(Request $request){
    $search=$request->input('search');
    $query=product::query()->where("status",1);
    if($search){
        $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%')
        ->orwhere('price','like','%' .$search. '%');
       

    }
    $data=$query->paginate(10);
    return view('admin.requested',compact('data'));
}

function updateproduct(Request $request,$id){
   
    $data=product::find($id);  
  
         $data->barcode=$data->barcode;
         $data->name=$request->input('name');
         $data->price=$request->input('price');
          $data->category_id=$request->input('category');
         $data->sdescription=$request->input('sdesc');
         $data->ldescription=$request->input('desc');
   
 

    if($request->hasfile('image')){
        $productimage='images/'.$data->image;
        if(File::exists($productimage)){
         File::delete($productimage);
                  }
       $image= $request->file('image');
       $ext=$image->getClientOriginalExtension();
       $image_name=time().".".$ext;
       $image->move('images',$image_name);
       $data->image=$image_name;

    }
    $data->save();
    return redirect('/showproduct');

    
    
    
    
 
 }
 
function accept($id){
    $data=product::find($id);
    $data->status=0;
    $data->save();
    return back();

}

function reject($id){
    $data=product::find($id);
    
    $data->status=2;
    $data->save();
    return back();

}
function sellerview(Request $request){
    $search=$request->input('searchs');
    $query=seller::query();
    if($search){
        $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%');

    }
    $seller=$query->paginate(5);
  
    return view('admin.viewseller',compact('seller'));
}
// cart
public function productcart(){
    $offer=offer::all();
    return view('cart',compact('offer'));
}


// function addproducttoCart($id){

//     $product=product::findOrFail($id);
//     $cart = session()->get('cart',[]);
//     if(isset($cart[$id])){
//         $cart[$id]['quantity']++;
//     }else{
//         $cart[$id] = [
//             "name" => $product->name,
//             "quantity" => 1,
//             "price" => $product->price,
//             "image" => $product->image        
//         ];
//     }
//     session()->put('cart',$cart);
//     return redirect()->back()->with('success','product has been added to cart succesfully');


// }

// function deletepro(Request $request){
//     if($request->id) {
//         $cart = session()->get('cart');
//         if(isset($cart[$request->id])) {
//             unset($cart[$request->id]);
//             session()->put('cart', $cart);
//         }
//         session()->flash('success', 'Product successfully deleted.');
//     }


// }
// public function updatecart(Request $request)
// {
//     if($request->id && $request->quantity){
//         $cart = session()->get('cart');
//         $cart[$request->id]["quantity"] = $request->quantity;
//         session()->put('cart', $cart);
//         session()->flash('success', 'Cart successfully updated!');
//     }
// }

// wishlist
public function productwish(){
    $offer=offer::all();
    $cartitem=cart::count();
    return view('wish',compact('offer','cartitem'));
}
function addproducttowish($id){
    $product=product::findOrFail($id);
    $wish = session()->get('wish',[]);
    if(isset($wish[$id])){
        $wish[$id]['quantity']++;
    }else{
        $wish[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image        
        ];
    }
    session()->put('wish',$wish);
    return redirect()->back()->with('success','product has been added to wishlist succesfully');


}
function deletewish(Request $request){
    if($request->id) {
        $wish = session()->get('wish');
        if(isset($wish[$request->id])) {
            unset($wish[$request->id]);
            session()->put('wish', $wish);
        }
        session()->flash('success', 'WishlistProduct successfully deleted.');
    }


}
function cartwish(){
    return view('wishitems');
}



}
