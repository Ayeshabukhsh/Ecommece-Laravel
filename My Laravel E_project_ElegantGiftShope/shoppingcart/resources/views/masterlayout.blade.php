<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Elegant Gift Shop</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}">
        <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
        <!-- Libraries Stylesheet -->
        <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{url('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{url('lib/owlcarousel/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

        <!--  Stylesheet -->
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <style>
            .namestyle{
                border-bottom-left-radius: 80px;
                border-bottom-right-radius: 80px;
                box-shadow: 2px 2px 10px black;
            }
            .namestyle:hover{
                box-shadow: 2px 2px 30px black;
            }
        </style>
    </head>

    <body>
 

<div>
    
   @foreach ($offer as $item)
  <div class="text-center p-1 " style="background-color:black; color:white;font-weight:bolder"><marquee behavior="" direction=""><h4 style="color:white;">{{$item->offer}}</h4></marquee></div>

  @endforeach


</div>
        <!-- Navbar start -->
        <div class="container-fluid nav-bar bg-light shadow-lg namestyle ">
            <div class="container">
                <nav class="navbar navbar-expand-lg py-2  bg-light">
                    <a href="/" class="navbar-brand">
                        <h1 class="text-primary fw-bold mb-0">Elegant<span class="text-dark">gift shop</span> </h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button><br>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto ">
                            <a href="/" class="nav-item nav-link text-dark "><i class="fa fa-home me-1 text-dark"></i>Home</a>
                          
                            <a href="/gift"  class="nav-item nav-link text-dark"><i class="fa fa-gift me-1 text-dark"></i>Gifts Articles</a>
                            <div class="nav-item ~dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown"><i class="fa fa-bars text-dark me-1"></i>Categories</a>
                                <div class="dropdown-menu bg-white">
                                 
                                    <a href="/g" class="dropdown-item text-dark">Greethings Cards</a>
                                    <a href="/doll" class="dropdown-item text-dark">Toys</a>
                                    <a href="/hand" class="dropdown-item text-dark">Hand Bags</a>
                                    <a href="/wallet" class="dropdown-item text-dark">Wallets</a>
                                    <a href="/beauty" class="dropdown-item text-dark">Beauty Products</a>
                                    <!-- <a href="/perfume" class="dropdown-item">Perfumes</a> -->
                                    <a href="/art" class="dropdown-item text-dark">Arts</a>
                                    <a href="/sta" class="dropdown-item text-dark">Stationary</a>
                                   
                                </div>
                            </div>
                            <a href="/about" class="nav-item nav-link text-dark"><i class="fa fa-smile me-1 text-dark"></i>About</a>
                            <a href="/contact" class="nav-item nav-link text-dark"><i class="fa fa-phone-alt me-1 text-dark"></i>Contact</a>
                             <a href="/feed" class="nav-item nav-link text-dark"><i class="fas fa-smile me-1 text-dark"></i>Feedback</a> 
                        </div>
                     
                       
                        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style='text-decoration:none;color:black;'><b><i>Wellcome..  {{ Auth::user()->name }}</i></b> </a>
                               
                        <a href="{{ route('shopping.wish') }}"><button class=" btn btn-primary btn-md-square rounded-circle  d-lg-inline-flex me-2" > <i class="fa fa-heart " ></i></button></a> 
                        
                        <a href="{{url('addtocart')}}"> <button class=" btn btn-primary btn-md-square me-2 rounded-circle  d-lg-inline-flex" > <i class="fa fa-shopping-cart"></i></button> <span class="badge bg-dark">{{ $cartitem }}</a> 
                        
                                
                    @else
                      <a href="{{ route('login') }}" class="  btn-search btn btn-primary btn-md-square rounded-circle  d-lg-inline-flex" ><i class="fa fa-user"></i></a>
                           
                    <a href=""  data-bs-toggle='modal' data-bs-target='#modal2'>
                    <button class=" btn btn-primary btn-md-square rounded-circle  d-lg-inline-flex me-2" > <i class="fa fa-heart " ></i></button></a> 
                    
                    <a href=""  data-bs-toggle="modal" data-bs-target="#modal2" > <button class=" btn btn-primary btn-md-square me-2 rounded-circle  d-lg-inline-flex" > <i class="fa fa-shopping-cart"></i></button> <span class="badge bg-dark">{{ count((array) session('cart')) }}</span></a> 
                    
                       
                    @endauth

                    {{-- <button class="ms-1 btn-search btn btn-primary btn-md-square btn-sm-square me-2 rounded-circle d-lg-inline-flex"  ><i class="fas fa-search"></i></button> --}}
                    
           
                </div>
                
            @endif
                      
                      
                     
                    </div>
                    <div class="modal" id="modal2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="text-center">Plz Login First</h1>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body mx-auto">
            <form action="{{ route('login') }}" method="post">
              @csrf
                <input type="email" name="email" class="form-control">
                <input type="password" name="password" class="form-control mt-3">
                <button class="mb-5 mt-3 btn btn-primary btn-sm border-0 rounded-pill px-md-5 animated bounceInLeft"  style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">  {{ __('Log in') }}</button> 
            </form>
            
     </div>
             </div>
                        </div>
            
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
      
        <div class="container-fluid mt-4">
            
            {{-- @if(session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div> 
            @endif --}}
            @yield('user')
            
        </div>
        @yield('scripts')

      


        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-dark wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary">Elegantgift<span class="text-white">Shop</span></h1>
                            <p class="lh-lg mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                            <div class="footer-icon d-flex">
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Special Facilities</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Gifts Articles</a>
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>toys</a>
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>hand bags</a>
                                <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>arts</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Contact Us</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> Karachi Pakistan</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i> (+92) 3032596607 </p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> ayeshakhan@gmail.com</p>
                                <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Social Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                     <img src="img/hand5.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/d1.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/a4.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/c9.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/img.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                                <div class="col-4">
                                     <img src="img/d4.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Elegant gift shop</a> Thans for visiting</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com"></a> AYESHA KHAN<a class="border-bottom" href="https://themewagon.com"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-dark bg-dark rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
        <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('lib/wow/wow.min.js')}}"></script>
        <script src="{{url('lib/easing/easing.min.js')}}"></script>
        <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{url('lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Javascript -->
        <script src="{{url('js/main.js')}}"></script>
       
    </body>
</html>