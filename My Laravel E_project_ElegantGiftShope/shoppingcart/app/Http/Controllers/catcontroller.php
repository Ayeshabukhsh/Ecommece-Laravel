<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;
use App\Models\category;



class catcontroller extends Controller
{
    function addcategory(){
        return view('admin.addcategory');
    }
   
    function addcategorydata(Request $request){
        $request->validate([
            'name'=>'required|string|min:3',
            'desc'=>'required|string|max:255',
           
            'image'=>'required|mimes:jpg,png',
        ]);
        $data = new category();
        $data->name=$request->input('name');
        $data->description=$request->input('desc');
       
     

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
    function viewcategory(Request $request){
        $search=$request->input('searchb');
        $query=category::query();
        if($search){
            $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%');

        }
        $data=$query->paginate(5);
      
        return view('admin.viewcategory',compact('data'));
    }
    function deletecategory($id){
        category::destroy($id);
        return back();
    
    }

    function updatecategory(Request $request,$id){
   
        $data=category::find($id);   
        $data->name=$request->input('name');
        $data->description=$request->input('desc');
       
     

        if($request->hasfile('image')){
            $teamimage='images/'.$data->image;
            if(File::exists($teamimage)){
             File::delete($teamimage);
                      }
           $image= $request->file('image');
           $ext=$image->getClientOriginalExtension();
           $image_name=time().".".$ext;
           $image->move('images',$image_name);
           $data->image=$image_name;

        }
        $data->save();
        return redirect('/viewcategory');

        
        
        
        
     
     }

  
}
