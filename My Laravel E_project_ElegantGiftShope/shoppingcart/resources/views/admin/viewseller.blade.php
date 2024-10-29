@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container">
        <div class="row">
         
            <div class="col-lg-10 w-90 mx-auto mt-5 shadow-lg mb-5">
                <h1 class="text-center">ALL SELLERS</h1>
            <form action="{{url('searchs')}}" method='post' class='d-flex mt-4 mb-5'>
                 
            <a href="{{url('sellersview')}}" class='btn btn-sm'  style="background-color:goldenrod;color:white;">Clear Filters</a>
           
                @csrf
                        <input type="text" name="searchs" placeholder="by id,name" class="form-control w-25  ms-auto ">
                      
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
                           
                           
                    
                          
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seller as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                      
                                     
                                     
                                       
                                     
                                         {{-- <td><a href="deletefeedback/{{$item->id}}" class='btn btn-danger btn-sm'> <i class="fas fa-trash"></i>Reject</a></td> --}}
                                      
                                       
                                    </tr> 
                                    @endforeach
                                   
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
           
                {{ $seller->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

                  
@endsection