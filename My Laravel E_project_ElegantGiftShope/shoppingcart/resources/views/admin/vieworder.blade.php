@extends('admin.masterlayoutadmin') 
 @section('admin')
 
 <div class="container">
        <div class="row">
         
            <div class="col-lg-10 w-90 mx-auto mt-5 shadow-lg mb-5">
                <h1 class="text-center">ALL ORDERS</h1>
         
                 
        
           
             
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                             <th>ID</th>
                            <th>CUSTOMER-ID</th>
                            <th>BILL</th>
                             <th>STATUS</th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>EMAIL</th>
                            <th>ADDRESS</th>
                            <th>PHONE</th>
                            <th>Delete</th>
                           
                           
                    
                          
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->customerid}}</td>
                                        <td>{{$item->bill}}</td>
                                         <td>{{$item->status}}</td>
                                        <td>{{$item->firstname}}</td>
                                        <td>{{$item->lastname}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->phone}}</td>
                                      
                                     
                                     
                                       
                                     
                                          <td><a href="deleteorder/{{$item->id}}" class='btn btn-danger btn-sm'> <i class="fas fa-trash"></i>Reject</a></td> 
                                      
                                       
                                    </tr> 
                                    @endforeach
                                   
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
           
              
            </div>
        </div>
    </div>

                  
@endsection