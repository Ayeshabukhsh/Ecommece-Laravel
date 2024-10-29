@extends('admin.masterlayoutadmin') 
 @section('admin')

<form action="addteam" enctype="multipart/form-data" method="post" class="w-75 mx-auto mt-3 shadow-lg p-5">
                        <h1 class="text-center "><b>ADD TEAM MEMBERS</b> </h1>
                        @csrf
                        <input type="text" name="name" placeholder="Name of Product" class="form-control mt-3">
                        @error('name')
                        <span>{{$message}}</span>
                        @enderror
                        <input type="file" name="image" id="" class="form-control mt-3">
                        @error('image')
                        <span>{{$message}}</span>
                        @enderror
                        <textarea name="desc" id="" cols="30" rows="10"  placeholder=" Description" class="form-control mt-3"></textarea>
                        @error('desc')
                        <span>{{$message}}</span>
                        @enderror
                        <input type="submit" name="team" class="btn btn-dark mx-auto d-block mt-3">
                    </form>
                    @endsection