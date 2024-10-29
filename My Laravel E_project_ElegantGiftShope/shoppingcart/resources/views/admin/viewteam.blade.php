@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container">
        <div class="row">
            <div class="col-lg-10 w-75 mx-auto mt-5 shadow-lg p-5">
            <form action="{{url('searcht')}}" method='post' class='d-flex mt-4 mb-5'>
            <a href="{{url('viewteam')}}" class='btn btn-sm'  style="background-color:goldenrod;color:white;">Clear Filters</a>
           
                @csrf
                        <input type="text" name="searcht" placeholder="by id,name" class="form-control w-25  ms-auto ">
                      
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
                                        <th>EDIT</th>
                                        <th>DELETE</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                          
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td><img src="images/{{$item->image}}" height="90px"></td>
                                        <td>{{$item->description}}</td>
                                        <td class="align-center" style="text-align: center;">
                                            <button class="btn btn-warning btn-md" data-toggle="modal"
                                                data-target="#editStudentModal{{$item->id}}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>

                                         <td><a href="deleteteam/{{$item->id}}" class='btn btn-danger btn-md'><i class="fas fa-trash"></i></a></td>
                                       
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
   <div class="modal fade" id="editStudentModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel{{$item->id}}"
   aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <form method="post" action="{{url('updateteam',$item->id)}}"  enctype="multipart/form-data">
               @csrf
               <div class="modal-header">
                   <h5 class="modal-title" id="editStudentModalLabel{{$item->id}}"><i class="fas fa-edit"></i>
                       Edit Team</h5>
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
                       <label for="email"><i class="fas fa-image"></i> Image</label>
                       <input type="file"  name="image" class="form-control mt-2">
                       <img src="images/{{$item->image}}" height="80px">
                   </div>
                   <div class="form-group">
                       <label for="address"><i class="fas fa-address-card"></i>Description</label>
                       <input type="text" name='desc' value='{{$item->description}}' class='form-control mt-2'>
                   </div>
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