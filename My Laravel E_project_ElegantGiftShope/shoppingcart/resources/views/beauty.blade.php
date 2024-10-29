@extends('masterlayout') 
 @section('user')

   <!-- Hero Start -->
   <div class="container-fluid bg-light py-3 my-3 mt-0">
            <div class="container text-center animated bounceInDown">
                <h3 class="display-1 mb-4">BEAUTY PRODUCTS</h3>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                   
                    <li class="breadcrumb-item text-dark" aria-current="page">Beauty products</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->



        <div class="container">
            <img src="/img/banner.jpg" class='img-fluid'>
        </div> <br><br><br><br>
		<div class="container">
			<h1 class="text-center" style="font-family: cursive;"> <b> COLLECTIONS </b></h1>
			<hr style="color: black; font-family: cursive; margin: auto;height: 5px;margin-bottom:20px ;width: 100px;;">
			<br><br>
		  </div> <br><br><br>
        <div class="container mt-5 shadow-lg p-5">
			<div class="row">
				{{-- <div class="col-lg-2 ">
					<form action="">
						<div class="input-group ">
							<div class="input-group-prepend">
								<div class="input-group-text p-3"><i class="fa fa-search"></i></div>
							</div>
							<input type="text" class="form-control" placeholder="Search" id="search">
						</div>
					</form>
					<div class="row ">
						<div class="col-lg-12 col-sm-4 mt-5 bg-dark text-white p-3">
							<h2 id="category" class="text-white">Beauty Products</h2>
							<h3 class="text-white">find now:</h3>
							<hr>
							<form action="" id="categoryDetail">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="indoor" value="Indoor">
									<label class="form-check-label">Face Wash</label>
								</div><hr>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="outdoor" value="outdoor">
									<label class="form-check-label">Moisturizing Creams</label>
								</div><hr>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="succulents" value="succulents">
									<label class="form-check-label">Foundations</label>
								</div><hr>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="flowering" value="flowering">
									<label class="form-check-label">Blushons</label>
								</div><hr>
                                <div class="form-check">
									<input type="checkbox" class="form-check-input" id="flowering" value="flowering">
									<label class="form-check-label">Lipsticks</label>
								</div><hr>
                                <div class="form-check">
									<input type="checkbox" class="form-check-input" id="flowering" value="flowering">
									<label class="form-check-label">Maskara</label>
								</div><hr>
                                <div class="form-check">
									<input type="checkbox" class="form-check-input" id="flowering" value="flowering">
									<label class="form-check-label">Eye shadows</label>
								</div>
						</form>
						</div>
					
					</div>
			   
	
	
				</div> --}}
			<div class="col-lg-12">
				<div class="row gy-4">
				
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
  @endsection