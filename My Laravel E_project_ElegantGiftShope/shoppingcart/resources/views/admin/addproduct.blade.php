@extends('admin.masterlayoutadmin') 
 @section('admin')

<form action="addproductdata" enctype="multipart/form-data" method="post" class="w-75 mx-auto mt-3  shadow-lg p-5">
                        <h1 class="text-center "><b>ADD PRODUCTS</b> </h1>
                        @csrf
                        <input type="text" name="name" placeholder="Name of Product" class="form-control mt-3">
                        @error('name')
                        <span>{{$message}}</span>
                        @enderror
                        <input type="number" name="price"  placeholder="price of Product" class="form-control mt-3">
                         <input type="file" name="image" id="" class="form-control mt-3">
                        @error('image')
                        <span>{{$message}}</span>
                        @enderror
                        <select name='category' class="form-select mt-3" aria-label="Default select example">
                      <option selected> Select Category</option>
                      @foreach ($data as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                       
 
                        </select>
                       <input type="text" name="sdesc" placeholder="Short Description" class="form-control mt-3">
                       @error('sdesc')
                       <span>{{$message}}</span>
                       @enderror
                        <textarea name="desc" id="" cols="30" rows="10"  placeholder="long Description" class="form-control mt-3"></textarea>
                        @error('desc')
                        <span>{{$message}}</span>
                        @enderror
                        <input type="submit" name="product" class="btn btn-dark mx-auto d-block mt-3">
                    </form>
                    @endsection