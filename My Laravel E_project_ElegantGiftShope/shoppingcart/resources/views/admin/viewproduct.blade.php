@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 w-80 mx-auto mt-5 shadow-lg p-3 ">
                <h1 class='text-center'>ALL PRODUCTS</h1>
           
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
                                       
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                       
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
                                      
                                       
                                        <td class="align-center" style="text-align: center;">
                                            <button class="btn btn-warning btn-md" data-toggle="modal"
                                                data-target="#editproductModal{{$item->id}}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                        <td><a href="deleteproduct/{{$item->id}}" class='btn btn-danger btn-md'><i class="fas fa-trash"></i></a></td>
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
    @foreach ($data as $item)
   <!-- Edit Student Modal (for each student) -->
   <div class="modal fade" id="editproductModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editproductModalLabel{{$item->id}}"
   aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <form method="post" action="{{url('updateproduct',$item->id)}}"  enctype="multipart/form-data">
               @csrf
               <div class="modal-header">
                   <h5 class="modal-title" id="editproductModalLabel{{$item->id}}"><i class="fas fa-edit"></i>
                       Edit Products</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <input type="hidden" name="id" value=" ">
                   <div class="form-group">
                       <label for="name"><i class="fas fa-user"></i> Name</label>
                       <input type="text" value="{{$item->name}}" name="name" class="form-control mt-2">
                   </div>
                   <div class="form-group">
                    <label for="price"><i class="fas fa-money"></i> Price</label>
                    <input type="number" value="{{$item->price}}" name="price" class="form-control mt-2">
                </div>
                   <div class="form-group">
                       <label for="image"><i class="fas fa-image"></i> Image</label>
                       <input type="file"  name="image" class="form-control mt-2">
                       <img src="images/{{$item->image}}" height="80px">
                   </div>
                 
                    <select name='category' class="form-select mt-3" aria-label="Default select example">
                        <option > Select Category</option>
                 @foreach ($category as $cat)
                    <option value="{{$cat->id}}"  {{$item->category_id==$cat->id ? 'Selected' : ''}}> {{$cat->name}}</option> 
                        @endforeach 
                          </select>
              
                   <div class="form-group">
                       <label for="short desc"></i>Short Description</label>
                       <input type="text" name='sdesc' value='{{$item->sdescription}}' class='form-control mt-2'>
                   </div>
                   <div class="form-group">
                    <label for="long desc"></i>Long Description</label>
                    <input type="text" name='desc' value='{{$item->ldescription}}' class='form-control mt-2'>
                </div>
                {{-- <div class="form-group">
                    <label for="long desc"></i>Quantity</label>
                    <input type="number" name='qty' value='{{$item->quantity}}' class='form-control mt-2'>
                </div> --}}
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
               </div>
           </form>
       </div>
   </div>
</div>
@endforeach
                  
@endsection