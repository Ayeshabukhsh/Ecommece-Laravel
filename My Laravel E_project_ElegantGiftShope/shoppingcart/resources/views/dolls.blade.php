@extends('masterlayout') 
 @section('user')
       
    <!-- Hero Start -->
    <div class="container-fluid bg-light py-6 my-6 mt-0">
      <div class="container text-center animated bounceInDown">
          <div class="row">
              <div class="col-lg-6">
                  <div style="margin-top: 160px;">  <h1 class="display-1 mb-4">TEDDY BEARS</h1>
                      <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>
                        
                          <li class="breadcrumb-item text-dark" aria-current="page">Toys</li>
                      </ol></div>
                
              </div>
              <div class="col-lg-6">
                  <div class=" d-flex  align-items-center ">
                      <div class="card5 rounded-3 ">
                          <div class="top p-3 d-flex justify-content-between"> <i class=""></i> <i
                                  class=""></i> </div>
                          <div id="carouselExampleIndicators" class="carousel slide p-3 " data-bs-ride="carousel">
                              <div class="carousel-indicators"> <button type="button" data-bs-target="#carouselExampleIndicators"
                                      data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button
                                      type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                      aria-label="Slide 2"></button> <button type="button" data-bs-target="#carouselExampleIndicators"
                                      data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
                              <div class="carousel-inner">
                                  <div class="carousel-item active"> <img src="img/d1.jpg"
                                          class="d-block w-100 h-100" alt="..."> </div>
                                  <div class="carousel-item"> <img src="img/d3.jpg" class="d-block w-100"
                                          alt="..."> </div>
                                  <div class="carousel-item"> <img src="/img/d2.jpg" class="d-block w-100"
                                          alt="..."> </div>
                              </div> <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                  data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                                      class="visually-hidden">Previous</span> </button> <button class="carousel-control-next"
                                  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> <span
                                      class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                      class="visually-hidden">Next</span> </button>
                          </div>
                        
                      </div>
                  </div>
              </div>
          </div>
         
      </div>
  </div><br><br><br><br>
  <!-- Hero End -->
  <div class="container">
    <h1 class="text-center" style="font-family: cursive;"> <b> COLLECTIONS </b></h1>
    <hr style="color: black; font-family: cursive; margin: auto;height: 5px;margin-bottom:20px ;width: 100px;;">
    <br><br>
  </div> <br><br><br>
  <div class="container  p-5 shadow-lg" >
  
    <div class="row g-4" style="margin-top: 30px;">
     @foreach ($data as $item)
     <div class="col-md-3 col-sm-6 mt-3 shadow-lg">
              <div class="product-grid6  p-4 h-100">
                  <div class="product-image6">
                      <a href="#">
                          <img class="pic-1" src="images/{{$item->image}}">
                      </a>
                  </div>
                  <div class="">
                      <h1 class="title"><a href="#">{{$item->name}}</a></h1>
                      <h3 ><a href="#">{{$item->ldescription}}</a></h3>
                      <div class="price"><H3 style='color:goldenrod;'>PRICE:{{$item->price}}</H3>
                       
                      </div>
                  </div>
                  <ul class="social">
                    <li><a href="{{url('single', $item->id) }}" data-tip="Quick View">VIEW</a></li>
                      {{-- <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                      <li><a href="{{ route('addproduct.to.cart', $item->id) }}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li> --}}
                  </ul>
              </div>
          </div>
     
       
 
          @endforeach
    
    
    </div>
    
    
  </div>
  
     @endsection