@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container">
        <div class="row">
            <div class="col-lg-10 w-75 mx-auto mt-5 shadow-lg p-5">
            
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                             <th>ID</th>
                            <th>EMAIL</th>
                            <th>LOCATION</th>
                            <th>PHONE</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($info as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->location}}</td>
                                        <td>{{$item->phone}}</td>
                                      
                                        <td class="align-center" style="text-align: center;">
                                            <button class="btn btn-warning btn-md" data-toggle="modal"
                                                data-target="#editinfoModal{{$item->id}}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                         <td><a href="deleteinfo/{{$item->id}}" class='btn btn-danger btn-md'> <i class="fas fa-trash"></i></a></td>
                                       
                                    </tr> 
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
           
                
            </div>
        </div>
    </div>

    @foreach ($info as $item)
    <!-- Edit Student Modal (for each student) -->
    <div class="modal fade" id="editinfoModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="editinfoModalLabel{{$item->id}}"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{url('updateinfo',$item->id)}}"  enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editinfoModalLabel{{$item->id}}"><i class="fas fa-edit"></i>
                        Edit Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value=" ">
                    <div class="form-group">
                        <label for="email"><i class="fas fa-user"></i> Email</label>
                        <input type="text" value="{{$item->email}}" name="email" class="form-control mt-2">
                    </div>
                    <div class="form-group">
                        <label for="location"><i class="fas fa-location"></i> Location</label>
                        <input type="text" value="{{$item->location}}" name="location" class="form-control mt-2">
                    </div>
                    <div class="form-group">
                        <label for="phone"><i class="fas fa-phone"></i> Phone</label>
                        <input type="text" value="{{$item->phone}}" name="phone" class="form-control mt-2">
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