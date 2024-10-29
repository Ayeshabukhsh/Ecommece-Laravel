@extends('admin.masterlayoutadmin') 
 @section('admin')


<form action="{{url('addcategorydata')}}" enctype="multipart/form-data" method="post" class="w-75 mx-auto mt-3  shadow-lg p-5">
                        <h1 class="text-center text-dark"> <b>ADD CATEGORY</b> </h1>
                        @csrf
                        <input type="text" name="name" placeholder="Name of Category" class="form-control mt-3s">
                        @error('name')
                        <span>{{$message}}</span>
                        @enderror
                        <input type="file" name="image" id="" class="form-control mt-3">
                        @error('image')
                        <span>{{$message}}</span>
                        @enderror
                        <textarea name="desc"  placeholder="Description of Category" cols="30" rows="10" class="form-control mt-3"></textarea>
                        @error('desc')
                        <span>{{$message}}</span>
                        @enderror
                        <input type="submit" name="category" class="btn btn-dark mx-auto d-block mt-3">
                    </form>
                    @endsection