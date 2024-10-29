<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\file;
use App\Models\team;

class teamcontroller extends Controller
{
    function addteam(){
        return view('admin.addteam');
    }
   
    function addteamdata(Request $request){
        $request->validate([
            'name'=>'required|string|min:3',
            'desc'=>'required|string|max:255',
           
            'image'=>'required|mimes:jpg,png',
        ]);
        $data = new team();
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
    function viewteam(Request $request){
        $search=$request->input('searcht');
        $query=team::query();
        if($search){
            $query->where('name','like','%' .$search. '%') ->orwhere('id','like','%' .$search. '%');

        }
        $data=$query->paginate(4);
      
        return view('admin.viewteam',compact('data'));
    }
    function deleteteam($id){
        team::destroy($id);
        return back();
    
    }
    // function updatet($id){
    //     $team=team::find($id);
        
    //     return view('admin.updateteam',compact('team'));
    // }
    function updateteam(Request $request,$id){
   
        $data=team::find($id);   
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
        return redirect('/viewteam');

        
        
        
        
     
     }
   
}
