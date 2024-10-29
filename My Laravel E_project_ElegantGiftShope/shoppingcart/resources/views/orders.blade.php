@extends('masteruser')
@section('userdash')
<div class="container bg-white shadow-lg mt-5 p-5">
    <div class="container bg-white shadow-lg p-5">
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="mb-5">MY ORDERS HISTORY</h1>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>S:NO</th>
                            <th>Total Bill</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            <th>View Products</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                         @endphp
                         @foreach ($order as $item)
                         @php
                         $i++;
                          @endphp
                             <tr>
                                 <td>{{$i}}</td>
                                 <td>{{$item->bill}}</td>
                                 <td>{{$item->firstname}}</td>
                                 <td>{{$item->lastname}}</td>
                                 <td>{{$item->email}}</td>
                                 <td>{{$item->address}}</td>
                                 <td>{{$item->phone}}</td>
                                 <td>{{$item->status}}</td>  
                                 <td>{{$item->created_at}}</td>
                                 <td><button type="button"  data-bs-toggle='modal' data-bs-target='#modal5{{ $i }}' class="btn btn-success bg-success btn-sm">View Products</button>
                                    <div class="modal" id="modal5{{ $i }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                   <h1>Elegantgift shop</h1>
                                                   <h2>All products</h2>
                                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body mx-auto">
                                      
                                      
                                      <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Sub Total</th>
                                                <td>Grand total</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $itm)
                                            @if($item->id == $itm->orderid)
                                            <tr class="text-center">
                                                <td><img src="../images/{{$itm->image}}" width="50px" >
                                                    <h3>{{$itm->name}}</h3>
                                                </td>
                                                <td>{{$itm->quantity}}</td>
                                                <td>{{$itm->price}}</td>
                                                <td>{{$itm->price * $itm->quantity}}</td>
                                                <td>{{$item->bill}}</td>
                                            </tr>
                                            
                                            @endif

                                              
                                            @endforeach
                                           
                                        </tbody>
                                      </table>
                                                
                                                  

                                                        
                                      
                                                </div>
                                            
                                      
                                              
                                      
                                            </div>
                                        </div>
                                      
                                      </div>
                                 
                                      
                                      </td>
                             </tr>
                         @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <a href="/dashboard" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Back</a>
    </div>
</div>

@endsection