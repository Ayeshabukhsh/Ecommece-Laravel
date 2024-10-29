@extends('masteruser')
@section('userdash')
<div class="container">
    <h2 class="text-center">CART : ITEMS</h2>
</div>
<div class="untree_co-section before-footer-section pt-5 mt-5 shadow-lg p-5 bg-white">
    <div class="container bg-white">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table" id="cart">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                 
              
                 
                
                </tr>
              </thead>
              <tbody>
           
                @foreach ($cartitems as $item)
                <tr>
                  <td class="">
                      <img src="../images/{{$item->image}}" class="qq" alt="Image">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$item->name}}</h2>
                    </td>
                    <td>{{$item->price}}</td>
              
             
           
                   
                
               
               
              </tr>
             
                @endforeach
             

              
              </tbody>
            </table>
          </div>
        </form>
      </div>
      <a href="/dashboard" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Back</a>

      {{-- <a href="{{route('shopping.cart')}}" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Buy Now</a> --}}
    </div>
  </div>

{{-- <table id="cart" class="table table-bordered">
<thead>
   <tr>
<th>Product</th>
    <th>Price</th>
    <th>Total</th>
  <th></th>
   </tr>
    </thead>
    <tbody>
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        <tr rowId="{{ $id }}">
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="images/{{ $details['image'] }}" height="80px" class="card-img-top"/></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                    </div>
                </div>
            </td>
            <td data-th="Price">PKR-{{ $details['price'] }}</td>
            
            <td data-th="Subtotal" class="text-center"></td>
            <td class="actions">
                <a class="btn btn-outline-danger btn-sm delete-product"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
@endforeach
@endif
    </tbody>

    </table> --}}
    @endsection
 