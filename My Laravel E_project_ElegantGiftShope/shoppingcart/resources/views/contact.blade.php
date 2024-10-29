

@extends('masterlayout') 
 @section('user')


    


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                  
                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->
<div class="container">
    <h1 class="text-center">CONTACT ON WHATSAPP</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="https://api.whatsapp.com/send?phone=923032596607&amp;text=Hello, I have a question." class="btn btn-success btn-lg mt-5"style='margin-left:630px;' target="_blank">
                <i class="fab fa-whatsapp text-white fa-xl"
         ></i>
                 <i class="" style="color: white;">whatsapp</i>
         
         </a>
        </div>
    </div>

</div>

        <!-- Contact Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1 class="display-5 mb-0">Mail Us For Any Queries!</h1>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                            <form  action="https://formsubmit.co/nimrahfarhan43@gmail.com" method='post'>
                                <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                                <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                                <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message"></textarea>
                                <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                            </form>
                        </div>
                        @foreach ($info as $item)
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Address</h4>
                                        <p>{{$item->location}}</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Mail Us</h4>
                                        <p class="mb-2">{{$item->email}}</p>
                                      
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div class="">
                                        <h4>Telephone</h4>
                                        <p class="mb-2">{{$item->phone}}</p>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                </div>
            </div>
        </div> <br><br><br><br>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">
          
            </div>
            <h2 style="font-family:'Courier New', Courier, monospace;" class=" text-center ">Location</h2><br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.872352418417!2d-118.60605248483382!3d34.20073771733752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c29d2514996521%3A0x740225deaf7dd8c5!2sRock%20Paradise!5e0!3m2!1sen!2s!4v1674575696840!5m2!1sen!2s"
                width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><br><br><br>  
        <!-- Contact End -->


      @endsection