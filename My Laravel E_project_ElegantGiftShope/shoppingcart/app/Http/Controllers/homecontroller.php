<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\file;
use App\Models\User;
use App\Models\feedback;
use App\Models\offer;
use App\Models\info;
use App\Models\product;
use App\Models\category;
use App\Models\seller;
use App\Models\order;



class homecontroller extends Controller
{
   
    
    
   
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->User()->usertype;
            if($usertype=='admin'){
                $dataadmin=product::count();
                $datasell=seller::count();
                $datacat=category::count();
                
                return view('admin.admindashboard',compact('dataadmin','datacat','datasell'));
            }
            else if($usertype=='user'){
                return view('dashboard');
            }
        
        }
            }


            // feedback work
            function viewfeedback(Request $request){
                $search=$request->input('searchf');
                $query=feedback::query();
                if($search){
                    $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%');
        
                }
                $feedback=$query->paginate(5);
              
                return view('admin.viewfeedback',compact('feedback'));
            }
         
            function deletefeedback($id){
                feedback::destroy($id);
                return back();
            
            }

          
            
    //    offerwork

    function addoffer(){
        return view('admin.offer');
    }
   
    function addofferdata(Request $request){
        $offer = new offer();
        $offer->offer=$request->input('offer');
   $offer->save();
        return back();
    }
    function viewoffer(Request $request){
        $search=$request->input('searchb');
        $query=offer::query();
        if($search){
            $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%');

        }
        $offer=$query->paginate(5);
      
        return view('admin.viewoffer',compact('offer'));
    }
    function deleteoffer($id){
        offer::destroy($id);
        return back();
    
    }
    function updateoffer(Request $request,$id){
   
        $offer=offer::find($id);   
        $offer->offer=$request->input('offer');
        $offer->save();
        return redirect('/viewoffer');
 }
    
    
    // infowork
    function addinfo(){
        return view('admin.addinfo');
    }
   
   function addinfodata(Request $request){
       $info = new info();
       $info->email = $request->input('email');
       $info->location = $request->input('location');
       $info->phone = $request->input('phone');
       $info->save();  // Corrected here
       return back();
   }
    function viewinfo(){
        $info=info::all();
        return view('admin.viewinfo',compact('info'));
    }
    function deleteinfo($id){
        info::destroy($id);
        return back();
    
    }
    function updateinfo(Request $request,$id){
   
        $info=info::find($id);   
        $info->email=$request->input('email');
        $info->location=$request->input('location');
        $info->phone=$request->input('phone');
        $info->save();
        return redirect('/viewinfo');
 }
 function vieworder(Request $request){
           
    $order=order::all();
  
 
  
    return view('admin.vieworder',compact('order'));
}
function deleteorder($id){
    order::destroy($id);
    return back();

}
}
