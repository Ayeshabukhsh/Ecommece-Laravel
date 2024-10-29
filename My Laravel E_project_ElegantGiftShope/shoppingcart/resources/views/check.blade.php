@extends('masterlayout') 
 @section('user')

 <div class="container mt-5">
    <form action="addorderdata" method="post">
    <div class="row">
        
        <div class="col-lg-6"> 
            <h3 class="text-center mt-5 mb-5">Your Shipping Details</h3>
            @csrf
            <input type="text" class="form-control mt-3" name="first_name" placeholder="First name">
            <input type="text" class="form-control mt-3" name="last_name_name" placeholder="last name">
            <input type="email" class="form-control mt-3" name="email" placeholder="email">
            <input type="text" class="form-control mt-3" name="address" placeholder="address">
            <input type="text" class="form-control mt-3" name="city" placeholder="city">
            <input type="text" class="form-control mt-3" name="zip" placeholder="zip"> 
            <input type="text" class="form-control mt-3" name="mobile" placeholder="mobile">
      </div>
        <div class="col-lg-6 mt-5">
            <table class="table site-block-order-table mb-5 mt-5">
                <thead>
                  <th>Product</th>
                  <th>Total</th>
                </thead>
                <tbody>
                  @php $total = 0 @endphp
                  @if(session('cart'))
               @foreach(session('cart') as $id => $details)
               @php $total += $details['price'] * $details['quantity'] @endphp
               <tr>
                <td>{{ $details['name'] }} <strong class="mx-2">x</strong>   {{ $details['quantity'] }}</td>
                <td>PKR-{{ $details['price'] * $details['quantity'] }}</td>
              </tr>
             
            
            
                  @endforeach
                  @endif
                  <tr>
                    <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                    <td class="text-black">{{$total}}</td>
                  </tr>
                  <tr>
                    <td class="text-black font-weight-bold"><strong>Shipping fees</strong></td>
                    <td class="text-black">0</td>
                  </tr>
                  <tr>
                    
                     <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                    <td class="text-black font-weight-bold"><strong>{{$total}}</strong></td> 
                  </tr>
                </tbody>
              </table>
              <div class="card-payment-form">
                <h3>Select Payment Method</h3> 
                <div class="form-group">
                <input checked type="radio" name="payment_method" value="cod" id="payment_one">
                <label for="payment_one" class="form_check_label">Cash on Delivery</label>
                </div>
                <div class="form-group">
                  <input type="radio" name="payment_method" value="cod" id="payment_two">
                  <label for="payment_two" class="form_check_label mb-5">Stripe</label>
                  </div>
              </div>
        </div>

    <button type="submit" class="w-50 mx-auto btn btn-dark mt-5">Place Order</button>
    </div>
</form>
 </div>
 @endsection