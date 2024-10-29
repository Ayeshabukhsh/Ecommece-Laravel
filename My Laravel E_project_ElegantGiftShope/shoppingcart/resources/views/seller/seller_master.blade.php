<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          
        <div class="col-lg-2 py-5" style="height:100vh;background-color:black; ">
                <a href="/">
                    <a href="/" class="navbar-brand">
                        <h3 class="" style="font-family: cursive;color:rgb(169, 126, 17);">Elegant<span class="text-light">gift shop</span> </h3>
                    </a>
                </a>    
                <ul class="nav nav-tab flex-column mt-5">
                <li class="nav-item"><a href="{{route('seller.dashboard')}}"  class="nav-link text-light mt-3"><i class="fas fa-smile me-2"></i>Dashboard</a></li><hr style="background-color: azure">
                    <li class="nav-item active"><a href="ps"  class="nav-link text-light mt-3"><i class="fas fa-plus me-2"></i>ADD PRODUCT</a></li><hr style="background-color: azure">
                    <li class="nav-item"><a href="{{url('seller/showproducts')}}"  class="nav-link text-light mt-3"><i class="fas fa-eye me-2"></i>VIEW PRODUCT</a></li><hr style="background-color: azure">
                    <li class="nav-item"><a href="{{url('seller/viewcategorys')}}"  class="nav-link text-light mt-3"><i class="fas fa-bars me-2"></i>VIEW CATEGORIES</a></li>

                    {{-- <li class="nav-item"><a href="{{url('addbrand')}}" class="nav-link text-light mt-3">ADD BRAND</a></li>
                    <li class="nav-item"><a href="{{url('showbrand')}}" class="nav-link text-light mt-3">VIEW BRAND</a></li> --}}
                  
                </ul>
            </div>
            <div class="col-lg-10 ">
            <nav class="navbar  shadow-lg">
                    <form action="{{url('search')}}" class='d-flex'>
                        <input type="text" name="search" id="" class="form-control" style="border-radius: 50px;">
                        <button class='btn'  style="background-color:rgb(169, 126, 17); border-radius: 50px;color:white;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                 
                        <div class="dropdown me-3 ms-auto">
                            <button class="btn dropdown-toggle" style="background-color:rgb(169, 126, 17);color:white;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fas fa-message" ></i>
                            </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              
                              <li></li>
                             
                            </ul> 
                          </div>
                
                    <div class="col-lg-1 me-5">
                    <div class="dropdown">
  <button class="btn dropdown-toggle" style="background-color:rgb(169, 126, 17);color:white;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
{{ Auth::guard('seller')->user()->name }}
  </button>
 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    {{-- <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li> --}}
    <li><a class="dropdown-item" href="{{route('seller.logout')}}">Logout</a></li>
   
  </ul> 
</div>

                    </div>
            </nav>
 @yield('seller')
                 
            </div>
        </div>
    </div>
   
</body>
</html>