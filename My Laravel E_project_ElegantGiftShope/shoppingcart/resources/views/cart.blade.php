@extends('masterlayout')
@section('user')

<div class="container">
    <h2 class="text-center">CART : ITEMS</h2>
</div>
<div class="container shadow-lg p-5">
  <div class="container shadow-lg p-5">
    <div class="untree_co-section before-footer-section pt-5 mt-5 shadow-lg p-5">
      <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
        @endif
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
          
              <table class="table" id="cart">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
              
               
               @php 
               $total = 0;
               @endphp
                @foreach ($cartitems as $item)
                <tr>
                  <td class="">
                      <img src="../images/{{$item->image}}" height="100px" alt="Image">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$item->name}}</h2>
                    </td>
                    <td>{{$item->price}}</td>
              
                <td data-th="Quantity">
                  <form action="{{URL::to('updatecart')}}" method="post">
                    @csrf
                  <input type="number" name="quantity" min="1" value="{{$item->quantity}}"  class="form-control q1">
                  <input type="hidden" name="id" value="{{$item->id}}">
                  <input type="submit" name="update" class="btn btn-success q1" value="update">
                </form>
            </td>
           
                   
                  <td data-th="Subtotal" class="text-center">{{$item->price * $item->quantity}}</td>
                   <td class="text-center "><a href="{{url('deletecartitems',$item->id)}}"><i class="fas fa-trash text-danger"></i></a></td>
                  </td>
              </tr>
              @php
              $total+= ($item->price * $item->quantity);
             @endphp
                @endforeach
                
          
               
  
                
                </tbody>
              </table>
            </div>
          </form>
        </div>
  
        <div class="row mt-5">
          <div class="col-md-6">
            <div class="row mb-5">
              {{-- <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-black btn-sm btn-block">Update Cart</button>
              </div> --}}
              <div class="col-md-6">
                  <a href="/" class="btn btn-primary border-0 animated bounceInLeft">Continue Shopping</a>
              </div>
            </div>
       
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <h4>Subtotal :{{$total}}</h4>
                  </div> <hr>
                  <div class="col-md-12 mt-3 text-right">
                    <h4><strong>Shipping fees : 0</strong></h4>
                  </div>
                <hr>
                  <div class="col-md-12 mt-3 text-right">
                    <h4><strong>Total : {{$total}}</strong></h4>
                  </div>
                </div>
               
  
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-dark" data-bs-toggle='modal' data-bs-target='#modal3'>Enter Your Details for Checkout</button>
                   
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>
<div class="modal" id="modal3">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             <h1>Elegantgift shop</h1>
              <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body mx-auto">



            <h2 class=" mt-4 text-center">Your Details</h2>
            <hr>
                    <form action="{{url('stripe')}}">
                    
                      <input type="text" name="fname" class="form-control mt-3" required placeholder="First name">
                      <input type="text" name="lname" class="form-control mt-3" required placeholder="Last name">
                      <input type="email" name="email" class="form-control mt-3" required placeholder="email">
                      <input type="text" name="phone" class="form-control mt-3" required placeholder="Phone number">
                      <input type="text" name="address" class="form-control mt-3 " placeholder="Address" required>
                      <input type="hidden" name="bill" value="{{$total }}" class="form-control mt-3 ">
                      <input type="submit" name="save" class=" btn btn-primary mt-5 border-0 animated bounceInLeft btn-block btn-lg" value=" Order Placed">
                     
                    </form>

          </div>

        

      </div>
  </div>

</div>

    @endsection
 