@extends('admin.masterlayoutadmin')
@section('admin')

  <form action="{{url('updateproduct',$product->id)}}" enctype="multipart/form-data" method="post" class="w-75 mx-auto mt-3 bg-light shadow-lg p-3">
                        <h1 class="text-center">Update Products</h1>
                        @csrf
                        <input type="text" value='{{$product->name}}' name="name" id="" class="form-control mt-3">
                        <input type="number"value='{{$product->price}}' name="price" id="" class="form-control mt-3">
                        <input type="file" name="image" class="form-control mt-3">
                        <img src="images/{{$product->image}}" alt="">
                        <select name='category' class="form-select mt-3" aria-label="Default select example">
                      <option selected> Select Category</option>
                      @foreach ($category as $item)
                      <option value="{{$item->id}}" {{$product->category->name===$item->name ? 'selected' : ''}}>{{$item->name}}</option>
                      @endforeach
                        </select>
                        <input type="text" name="sdesc" value="{{$product->sdescription}}" class="form-control mt-3">
                        <input type="text" name="desc" value="{{$product->ldescription}}" class="form-control mt-3">
                       
                        <input type="submit" name="insert" class="btn btn-dark mx-auto d-block mt-3">
</form> 

<form action="" enctype="multipart/form-data" method="post" class="w-75 mx-auto mt-3 bg-light shadow-lg p-3">
  <h1 class="text-center">Update Products</h1>
  @csrf
  <input type="text" value='' name="name" id="" class="form-control mt-3">
  <input type="number"value='' name="price" id="" class="form-control mt-3">
  <input type="file" name="image" class="form-control mt-3">
  <img src="" alt="">
  {{-- <select name='category' class="form-select mt-3" aria-label="Default select example">
<option selected> Select Category</option>
@foreach ($category as $item)
<option value="{{$item->id}}" {{$product->category->name===$item->name ? 'selected' : ''}}>{{$item->name}}</option>
@endforeach
  </select> --}}
  <input type="text" name="sdesc" value="" class="form-control mt-3">
  <input type="text" name="desc" value="" class="form-control mt-3">
 
  <input type="submit" name="insert" class="btn btn-dark mx-auto d-block mt-3">
</form>
@endsection




 
