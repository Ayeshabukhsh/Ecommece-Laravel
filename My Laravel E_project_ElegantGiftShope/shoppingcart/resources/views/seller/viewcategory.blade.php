@extends('seller.seller_master') 
 @section('seller')
 
 <div class="container">
        <div class="row">
            <div class="col-lg-11 w-80 mx-auto mt-5 shadow-lg p-5">
            <form action="{{url('searchcs')}}" method='post' class='d-flex mt-4 mb-5'>
            <a href="{{url('viewcategory')}}" class='btn btn-sm'  style="background-color:goldenrod;color:white;">Clear Filters</a>
           
                @csrf
                        <input type="text" name="searchcs" placeholder="by id,name" class="form-control w-25  ms-auto ">
                      
                        <button class='btn ' style="background-color:goldenrod;color:white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>DESCRIPTION</th>
                          
                           
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td><img src="../images/{{$item->image}}" height="90px"></td>
                                     
                                        <td>{{$item->description}}</td>
                                      
                                       
                                    </tr> 
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
           
                {{ $data->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>

           
@endsection