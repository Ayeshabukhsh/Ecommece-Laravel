@extends('masterlayout') 
 @section('user')

 <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div> 
 <!-- carousel -->
<div class="container-fluid">
      

        <!-- Hero Start -->
         <div class="container bg-light py-6 my-6 mt-0 ">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">Welcome to Elegant gift shop</small>
                        <h1 class="  animated bounceInDown">BUY FROM <span class="text-primary">ELEGANT</span>GIFT SHOP</h1>
                        <p>Everyone needs some fun, excitement, happiness and love in their life, but most do not know how to find it so, sending gifts to eachother is the great way to show your love</p>
                        <a href="/gift" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Buy Now</a>
                        <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img src="img/giftbanner.jpg" class="img-fluid img1 rounded-circle shadow-lg animated zoomIn" alt="">
                    </div>
                </div>
            </div>
        </div> 
        <!-- Hero End -->
     
           <!-- categories Start -->
           <div class="container-fluid service py-3">
            <div class="container-fluid p-5">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Categories</small>
                    <h1 class="display-5 mb-5">What We Sell</h1>
                    <hr style="color: black; font-family: cursive; margin: auto;height: 5px;margin-bottom:20px ;width: 100px;;">
     <br><br><br>
    
                </div>
                <div class="row g-3">
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-dark service-item shadow-lg" style=" border-top-right-radius:80px; border-bottom-left-radius:80px; ">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-gift fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Gifts Articles</h4>
                                  
                                    <a href="/gift" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-dark  service-item" style=" border-top-right-radius:80px; border-bottom-left-radius:80px; ">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-heart fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Cards</h4>
                                   
                                    <a href="/g" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-dark  service-item" style=" border-top-right-radius:80px; border-bottom-left-radius:80px; ">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    
                                    <i class="fas fa-child fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Toys</h4>
                                    
                                    <a href="/doll" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-dark  service-item" style=" border-top-right-radius:80px; border-bottom-left-radius:80px; ">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-shopping-bag fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Hand bags</h4>
                                  
                                    <a href="/hand" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-dark service-item" style=" border-top-right-radius:80px; border-bottom-left-radius:80px; ">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-wallet fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Men Wallets</h4>
                                  
                                    <a href="/wallet" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-dark service-item" style=" border-top-right-radius:80px; border-bottom-left-radius:80px; ">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-hands fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Beauty</h4>
                                  
                                    <a href="/beauty" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-dark  service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-box fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Stationary</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="/perfume" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-dark  service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-brush fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3 text-light">Arts</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="/art" class="btn btn-primary px-4 py-2 rounded-pill">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div><br><br> <br><br>
        <!--  End -->
      
        <div class="container pt-4">
            <h1 class="text-center">New Arrivals</h1>
            <hr
                                style="color: black; font-family: cursive; margin: auto;height: 5px;margin-bottom:20px ;width: 100px;;">
        </div><br><br><br>
        <div class="container  p-5 shadow-lg" >
  
            <div class="row gy-4" style="margin-top: 30px;">
             @foreach ($datad as $item)
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



<br><br><br><br>

<div class="container-fluid mt-5 mb-5 p-5">
    <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 bg-dark text-white">
       
       <h2 class="text-center  text-white mt-5 pt-5">Sale Coming Soon! Hurry up! BE Ready on this friday for super sale of the month on all gifts items and other produts of our site  shop and enjoy</h2>
    </div>
    <div class="col-lg-9 col-md-6 col-sm-12">
        <img src="/img/sale.jpg" class="img-fluid" alt="">
    </div></div>
  
</div>
<br><br><br><br>


      


     
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 ">
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
                                    <div class="carousel-item active"> <img src="images/p1.jpg"
                                            class="d-block w-100 h-100" alt="..."> </div>
                                    <div class="carousel-item"> <img src="images/perfue2.jpg" class="d-block w-100"
                                            alt="..."> </div>
                                    <div class="carousel-item"> <img src="/images/perfume3.jpg" class="d-block w-100"
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
            
        </div>  <br><br> --}}

        <!-- Events Start -->
        <!-- <div class="container-fluid event py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Latest Events</small>
                    <h1 class="display-5 mb-5">Our Social & Professional Events Gallery</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">All Events</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Wedding</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Corporate</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                <span class="text-dark" style="width: 150px;">Cocktail</span>
                            </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                <span class="text-dark" style="width: 150px;">Buffet</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-1.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/event-1.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-2.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/event-2.jpg" data-lightbox="event-2" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-3.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/event-3.jpg" data-lightbox="event-3" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/event-4.jpg" data-lightbox="event-4" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-5.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Cocktail</h4>
                                                    <a href="img/event-5.jpg" data-lightbox="event-5" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-6.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/event-6.jpg" data-lightbox="event-6" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-7.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/event-7.jpg" data-lightbox="event-7" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/event-8.jpg" data-lightbox="event-17" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-1.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-2.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Wedding</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-9" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-3.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-10" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-4.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Corporate</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-11" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-5.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Cocktail</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-12" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-6.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Cocktail</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-13" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-7.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-14" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3">
                                            <div class="event-img position-relative">
                                                <img class="img-fluid rounded w-100" src="img/event-8.jpg" alt="">
                                                <div class="event-overlay d-flex flex-column p-4">
                                                    <h4 class="me-auto">Buffet</h4>
                                                    <a href="img/01.jpg" data-lightbox="event-15" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
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
        </div> -->
        <!-- Events End -->


<br><br><br>
{{-- best selling --}}
<div class="container-fluid mt-5">
    <div class="row"  data-aos="fade-down">
        <div class="col-lg-12">
            <H3 class='text-center'><B>BEST SELLLING</B></H3>
            <P class="text-center">these are best selling items</P>
            <hr
                style="color: black; font-family: cursive; margin: auto;height: 5px;margin-bottom:20px ;width: 100px;;">
        </div>
    </div>
</div> <br> <br> <br>
<div class="container-fluid  p-5">

    <ul class="cards">
        @foreach ($data as $item)
        <li class="card">
            <div>



                <div class="card-body">
                    
                    <img src="images/{{$item->image}}" 
                   
                    class="card-img-top" alt="">
                    <h3 class="text-dark">{{$item->price}}</h3>

                </div>
            </div>
            <div class="card-link-wrapper">
                <a href="{{url('single', $item->id) }}" class="card-link" data-tip="Quick View">VIEW</a>
              
            </div>
        </li>
        @endforeach
       
    </ul>
</div> <br><br><br><br><br>

{{-- end --}}
        <!-- Testimonial Start -->
          <div class="container-fluid py-3 mt-5">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                 <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">FEEDBACKS</small> 
                    <h1 class="display-5 mb-5">What Our Customers says!</h1>
                </div>
                <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                    @foreach ($feedback as $item)
                    <div class="testimonial-item rounded " style="height: 300px">
                        <div class="d-flex mb-3">
                            <img src="images/{{$item->image}}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0 text-dark">{{$item->name}}</h4>
                                <p class="m-0"> <b class="me-2">Experience on Site:</b>{{$item->experience}}</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                         <h3 class="text-dark">CUSTOMER REVIEW</h3>
                            <p class="fs-5 m-0 ">{{$item->Message}}</p>
                        </div>
                    </div>
                    @endforeach
                    
                   
                </div>
                  {{-- <div class="owl-carousel testimonial-carousel testimonial-carousel-2 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>   --}}
            </div>
        </div> 

        
        <!-- Testimonial End -->


        <!-- Blog Start -->
         {{-- <div class="container-fluid blog py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Blog</small>
                    <h1 class="display-5 mb-5">Be First Who Read News</h1>
                </div>
                <div class="row gx-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="blog-item">
                            <div class="overflow-hidden rounded">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content mx-4 d-flex rounded bg-light">
                                <div class="text-dark bg-primary rounded-start">
                                    <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                        <p class="fw-bold mb-0">16</p>
                                        <p class="fw-bold mb-0">Sep</p>
                                    </div>
                                </div>
                                <a href="#" class="h5 lh-base my-auto h-100 p-3">How to get more test in your food from</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
        <!-- Blog End -->

        <div style="height: 50px; width:80px; border-top-right-radius:30px; border-bottom-right-radius:30px; margin-bottom:60px; " class="fixed-bottom shadow-lg bg-dark text-light ">
          <a href="https://api.whatsapp.com/send?phone=923032596607&amp;text=Hello, I have a question."><i class="fab fa-whatsapp text-white pt-2  ms-3"
            style="font-size: 30px"></i></a>  </div>
        <div style="height: 50px; width:80px; border-top-right-radius:30px; margin-bottom:130px; border-bottom-right-radius:30px;" class="fixed-bottom shadow-lg bg-dark text-light ">
           <a href="https://www.instagram.com/"><i class="fab fa-instagram text-white pt-2  ms-3 "
            style="font-size: 30px"></i></a> </div>
            <div style="height: 50px; width:80px; border-top-right-radius:30px; margin-bottom:200px; border-bottom-right-radius:30px;" class="fixed-bottom shadow-lg bg-dark text-light">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook text-white  pt-2 ms-3" style="font-size: 30px"
                    ></i></a></div>
 @endsection