@extends('masterlayout') 
 @section('user')
       
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/a.png" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/ww.png" class="d-block w-100 img-fluid" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/img/pe.png" class="d-block w-100 img-fluid" alt="...">
      </div>
      {{-- <div class="carousel-item">
        <img src="/img/111.jpg" class="d-block w-100 img-fluid" alt="...">
      </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>



     <!-- Events Start -->
     <div class="container-fluid event py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                  
                    <h1 class="display-5 mb-5 mt-5">BEST GIFTS ARTICLES</h1>
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">BUY NOW</small>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">Men Watches </span>
                                <a href="/gift" class='btn btn-dark btn-sm'>View</a>
                              
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;color:goldenrod;">Women Watches <a href="/gift1" class='btn btn-dark btn-sm'>View</a></span>
                               
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Rings    <a href="/gift2" class='btn btn-dark btn-sm'>view</a></span>
                            </a>
                         
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Show Pieces <a href="/gift3" class='btn btn-dark btn-sm'>view</a></span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                            <span class="text-dark" style="width: 150px;">Perfumes <a href="/gift4" class='btn btn-dark btn-sm'>view</a> </span></a>  
                           
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4"> <br><br><br><br>
                                <div class="container mt-5">
                                    <h1 class="text-center" style="font-family: cursive;"> <b> COLLECTIONS </b></h1>
                                    <hr style="color: black; font-family: cursive; margin: auto;height: 5px;margin-bottom:20px ;width: 100px;;">
                                    <br><br>
                                  </div> <br><br><br>
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                    
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
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                                          
                                        @foreach ($data as $item)
     <div class="col-md-3 col-sm-6 mt-3">
              <div class="product-grid6 bg-dark p-4 h-100">
                  <div class="product-image6">
                      <a href="#">
                          <img class="pic-1" src="images/{{$item->image}}">
                      </a>
                  </div>
                  <div class="product-content">
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
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                                         
                                        @foreach ($data as $item)
     <div class="col-md-3 col-sm-6 mt-3">
              <div class="product-grid6 bg-dark p-4 h-100">
                  <div class="product-image6">
                      <a href="#">
                          <img class="pic-1" src="images/{{$item->image}}">
                      </a>
                  </div>
                  <div class="product-content">
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
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                                         
                                        @foreach ($data as $item)
     <div class="col-md-3 col-sm-6 mt-3">
              <div class="product-grid6 bg-dark p-4 h-100">
                  <div class="product-image6">
                      <a href="#">
                          <img class="pic-1" src="images/{{$item->image}}">
                      </a>
                  </div>
                  <div class="product-content">
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
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                                       
                                        @foreach ($data as $item)
     <div class="col-md-3 col-sm-6 mt-3">
              <div class="product-grid6 bg-dark p-4 h-100 shadow-lg">
                  <div class="product-image6">
                      <a href="#">
                          <img class="pic-1" src="images/{{$item->image}}">
                      </a>
                  </div>
                  <div class="product-content">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Events End -->

     @endsection