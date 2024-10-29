@extends('masterlayout')
@section('user')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 col-md-12 col-sm-12 mx-auto">
            <form action="addfeedbackdata" enctype="multipart/form-data" method="post" class="mt-3  shadow-lg p-3">
                <small class="d-inline-block text-center fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">this feedback help us to improve our service</small>
                <h1 class="display-5 mb-0 text-center">GIVE FEEDBACK!</h1>
                @csrf
                <input type="text" name="name" placeholder='Enter Your Name' class="w-100 form-control p-3 mb-4 border-primary bg-light">
                <input type="email" name="email"placeholder='Enter Your Email' class="w-100 form-control p-3 mb-4 border-primary bg-light">
                <input type="file" name="image" class="w-100 form-control p-3 mb-4 border-primary bg-light">
                <input type="text" name="city"placeholder='Enter Your City' class="w-100 form-control p-3 mb-4 border-primary bg-light">
                <input type="text" name="pro"placeholder='Enter Your Favorite Product of our site' class="w-100 form-control p-3 mb-4 border-primary bg-light"> 
                <H2>Select Gender:</H2>
                <div class="form-check">
                    <input type="radio" name="gender" value='Female' class='form-check-input'>
                    <label for="" class='form-check-label'>Female</label>
            
                </div>
                <div class="form-check">
                    <input type="radio" name="gender"  value='Male' class='form-check-input'>
                    <label for="" class='form-check-label'>Male</label>
            
                </div> <br><br>
                <h2>Your Experience On Our Site:</h2>
                <div class="row">
                    <div class="col-lg-2">   <div class="form-check">
                        <input type="radio" name="exp" value='EXELLENT' class='form-check-input'>
                        <label for="" class='form-check-label'>Exellent</label>
                
                    </div></div>
                    <div class="col-lg-2">                <div class="form-check">
                        <input type="radio" name="exp" value='GOOD' class='form-check-input'>
                        <label for="" class='form-check-label'>Good</label>
                
                    </div></div>
                    <div class="col-lg-2">
                        <div class="form-check">
                            <input type="radio" name="exp" value='POOR' class='form-check-input'>
                            <label for="" class='form-check-label'>Poor</label>
                    
                        </div>
                        </div>
                </div>
                <textarea class="w-100 form-control mb-4 mt-5 p-3 border-primary bg-light" rows="4" name="msg" cols="10" placeholder="Any Message For us"></textarea>
             

               
              
                <button class="w-100 mt-5 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
            </form>
        </div>
      
    </div>
</div>

@endsection