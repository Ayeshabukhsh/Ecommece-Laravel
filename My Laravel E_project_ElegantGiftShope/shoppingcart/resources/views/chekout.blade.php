@extends('masterlayout') 
 @section('user')

 <div class="untree_co-section">
    <div class="container">
      <form action="addorderdata" method="post">
        @csrf
     <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="h3 mb-3 text-black">Billing Details</h2>
          <div class="p-3 p-lg-5 border bg-white">
        
            <div class="form-group row">
              <div class="col-md-6">

                <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="first_name" name="first_name">
                <p></p>
              </div>
              <div class="col-md-6">
                <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="last_name_name" name="last_name_name">
                <p></p>
              </div>
            </div>

         

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                <p></p>
              </div>
            </div>

          
            <div class="form-group row">
              <div class="col-md-6">
                <label for="city" class="text-black">City <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="city" name="city">
                <p></p>
              </div>
              <div class="col-md-6">
                <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="zip" name="zip">
                <p></p>
              </div>
            </div>

            <div class="form-group row mb-5">
              <div class="col-md-6">
                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="email" name="email">
                <p></p>
              </div>
              <div class="col-md-6">
                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Phone Number">
                <p></p>
              </div>
            </div>

          



        

          </div>
        </div>
        <div class="col-md-6">

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Coupon Code</h2>
              <div class="p-3 p-lg-5 border bg-white">

                <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                <div class="input-group w-75 couponcode-wrap">
                  <input type="text" class="form-control me-2" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-black btn-sm" type="button" id="button-addon2">Apply</button>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-12">
              <h2 class="h3 mb-3 text-black">Your Order</h2>
              <div class="p-3 p-lg-5 border bg-white">
                <table class="table site-block-order-table mb-5">
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

                {{-- <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank"></a></h3>

                  <div class="collapse" id="collapsebank">
                    <div class="py-2">
                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 mb-3">
                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                  <div class="collapse" id="collapsecheque">
                    <div class="py-2">
                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                  </div>
                </div>

                <div class="border p-3 mb-5">
                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                  <div class="collapse" id="collapsepaypal">
                    <div class="py-2">
                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                    </div>
                  </div>
                </div> --}}
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
    <div class="" id="card-payment-form">
      <label for="Card_number">Card Number</label>
      <input type="text" name="card_number" placeholder="Valid Card Number" class="form-control mb-3">
      <div class="row">
        <div class="col-md-6">
<label for="expiry_date">EXPIRY DATE</label>
<input type="text" name="expiry_date" placeholder="MM/YYYY" class="form-control mb-3" id="">
        </div>
        <div class="col-md-6">
          <label for="expiry_date">CVV Code</label>
          <input type="text" name="expiry_date" placeholder="123" class="form-control mb-3" id=""> 
        </div>
      </div>
    </div>
   
  <div class="form-group">
    <button class="btn btn-black bg-dark btn-lg py-3 btn-block" type="submit">Place Order</button>
  </div></div>
               

              </div>
            </div>
          </div>

        </div>
      </div>
    </form>
    </div>
  </div>
  @endsection
  @section('scripts')
  {{-- <script>
    $("#payment_method_one").click(function(){
      if ($(this).is(":checked") == true){
        $("#card-payment-form").addclass('d-none');
      }
    });
    $("#payment_method_two").click(function(){
      if ($(this).is(":checked") == true){
        $("#card-payment-form").removeclass('d-none');
      }
    });

  
    $('#orderForm').submit(function(event){
event.preventDefault();
$.ajax({
            url: '{{ route('proccess_checkout') }}',
            method: "post",
            data: {
                _token: '{{ csrf_token() }}', 
                $(this).serializeArray(), 
               
            }
            success: function (response) {
               window.location.reload();
            }
        });
    });
   </script> --}}
   @endsection

