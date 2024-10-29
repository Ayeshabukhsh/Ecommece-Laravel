@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container">
        <div class="row">
            <div class="col-lg-10 w-90 mx-auto mt-5 shadow-lg mb-5">
                <H1  class="text-center mb-3">ALL FEEDBACKS FROM USERS</H1>
            <form action="{{url('searchf')}}" method='post' class='d-flex mt-4 mb-5'>
            <a href="{{url('/vf')}}" class='btn btn-sm'  style="background-color:goldenrod;color:white;">Clear Filters</a>
           
                @csrf
                        <input type="text" name="searchf" placeholder="by id,name" class="form-control w-25  ms-auto ">
                      
                        <button class='btn ' style="background-color:goldenrod;color:white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                             <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>IMAGE</th>
                            <th>CITY</th>
                            <th>FAV PRODUCT</th>
                            <th>GENDER</th>
                           
                            <th>EXPERIENCE</th>
                            <th>MESSAGE</th>
                           <th>VIEW</th>
                          
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedback as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td><img src="images/{{$item->image}}" height="90px"></td>
                                     
                                        <td>{{$item->city}}</td>
                                        <td>{{$item->fproduct}}</td>
                                        <td>{{$item->gender}}</td>
                                        <td>{{$item->experience}}</td>
                                        <td>{{$item->Message}}</td>
                                     
                                         <td><a href="deletefeedback/{{$item->id}}" class='btn btn-danger btn-md'> <i class="fas fa-trash"></i></a></td>
                                      
                                       
                                    </tr> 
                                    @endforeach
                                   
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
           
                {{ $feedback->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

                  
@endsection