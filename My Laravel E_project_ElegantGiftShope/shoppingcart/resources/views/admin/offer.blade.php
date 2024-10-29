@extends('admin.masterlayoutadmin') 
 @section('admin')

 <form action="{{url('addofferdata')}}" method="post" class="w-75 mx-auto mt-3 shadow-lg p-5">
    <h1 class="text-center text-dark"> <b>ADD OFFER </b> </h1>
    @csrf
    <input type="text" name="offer" placeholder="Write Offer Here" class="form-control mt-3s">
  
    <input type="submit" name="category" class="btn btn-dark mx-auto d-block mt-3">
</form>
@endsection