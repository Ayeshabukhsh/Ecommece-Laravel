@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 w-80 mx-auto mt-5 shadow-lg p-3 ">
                <h1 class='text-center'>REQUESTED PRODUCTS FROM SELLERS</h1>
           
            <form action="{{url('search')}}" method='post' class='d-flex mt-4 mb-5'>
            <a href="{{url('showproduct')}}" class='btn btn-sm'  style="background-color:goldenrod;color:white;">Clear Filters</a>
           
                @csrf
                        <input type="text" name="search" placeholder="by id,name,price " class="form-control w-25  ms-auto ">
                      
                        <button class='btn ' style="background-color:goldenrod;color:white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>PRICE</th>
                                        <th>BARCODE</th>
                                        <th>IMAGE</th>
                                        <th>CATEORY</th>
                                        <th>SHORT DESC</th>
                                        <th>LONG DESC</th>
                                        <th>SELLER</th>
                                        <th>ACCEPT</th>
                                         <th>REJECT</th>
                                       
                                    </tr>
                                </thead>
                                {{-- <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> --}}
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td class='text-center'>{!!
                                             DNS1D::getBarcodeHTML($item->barcode, 'PHARMA',2,100,'black') !!} 
                                            p- {{$item->barcode}}
                                        </td>
                                        <td><img src="images/{{$item->image}}" height="90px"></td>
                                     <td>{{$item->category->name}}</td>
                                        <td>{{$item->sdescription}}</td>
                                        <td>{{$item->ldescription}}</td>
                                        <td>{{$item->user}}</td>
                                       <td><a href="{{url('accept',$item->id)}}" class="btn btn-primary text-white">Accept</a></td>
                                       <td><a href="{{url('reject',$item->id)}}" class="btn btn-danger text-white">Reject</a></td>
                                       
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