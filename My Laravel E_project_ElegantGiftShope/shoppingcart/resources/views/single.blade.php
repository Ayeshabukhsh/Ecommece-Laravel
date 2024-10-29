@extends('masterlayout')
@section('user')


<div class="container shadow-lg p-5">
    <div class="container shadow-lg p-5">
        <div class="container shadow-lg p-5 m-2">
            @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
            @endif
        <div class="row">
            <div class="col-lg-6">
                <img src="../images/{{$data->image}}" height="400px">

              
            </div>
            <div class="col-lg-4 mt-5">
               <h1 ><b> Products Details</b></h1>
                <h2 class="mt-5"><b>Name: </b>{{$data->name}}</h2>
                <h3 class="mt-4"> <b>Price:</b> {{$data->price}}</h3>
                <h3 class="mt-4"><b>Description: </b> {{$data->ldescription}}</h3>
                <form action="{{URL::to('addtocart')}}" method="post">
                    @csrf
                    <div>
                        <h3 class=" mt-4"><b>Select Quantity :</b></h3>
                        <input type="number" name="quantity" min="1" value="1"  class="form-control q1 text-center mx-auto mb-5 mt-3">
                    </div>
                    <input type="hidden" name="id" value="{{$data->id}}">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6  sm:block">
                        @auth
                        <button  type="submit" name="addtocart" class="btn btn-primary  animated bounceInLeft">Add to cart</button>     
                        @else
                        <a href=""  data-bs-toggle="modal" data-bs-target="#modal2"  class="btn btn-primary animated bounceInLeft">Add to cart</a> 
                        @endauth
                    </div>
                    
                @endif
               
                </form>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ route('addproduct.to.wish', $data->id) }}" class="btn btn-primary   animated bounceInLeft">Add to Wishlist</a>   
                    @else
                    <a href=""  data-bs-toggle="modal" data-bs-target="#modal2"  class="btn btn-primary  animated bounceInLeft">Add to Wishlist</a> 
                    @endauth
                </div>
                
            @endif
              
            </div>
            <div class="col-lg-2">
                <h3>Delivery</h3>
                <ul>
                    <li>  <h6>Standard Delivery</h6></li>
                    <li><h6>Free Delivery 10 Dec - 13 Dec
                        3 - 6 day(s)
                        Free
                        Enjoy free shipping promotion with minimum spend of Rs. 599 </h6></li>
                        <li><h6>Cash on Delivery Available</h6></li>
                </ul>
                <h3>Services</h3>
                <ul>
                    <li>  <h6>14 days free & easy return
                        Change of mind is not applicable
                        </h6></li>
                    <li><h6>Warranty not available</h6></li>
                     
                </ul>
           
            </div>
        </div>
    </div>
</div>

</div>


@endsection