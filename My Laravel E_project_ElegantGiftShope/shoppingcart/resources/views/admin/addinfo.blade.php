@extends('admin.masterlayoutadmin') 
 @section('admin')

 <form action="{{url('addinfodata')}}" method="post" class="w-75 mx-auto mt-3 shadow-lg p-5">
    <h1 class="text-center text-dark"> <b>ADD INFO </b> </h1>
    @csrf
    <input type="email" name="email" placeholder="Email" class="form-control mt-3">
   
    <input type="text" name="location" placeholder="location" class="form-control mt-3">
    
    <input type="text" name="phone"  placeholder="phone" class="form-control mt-3">
  
    <input type="submit" name="category" class="btn btn-dark mx-auto d-block mt-3">
</form>
@endsection