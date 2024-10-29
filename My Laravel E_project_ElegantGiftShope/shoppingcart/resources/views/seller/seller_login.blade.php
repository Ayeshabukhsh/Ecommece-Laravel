<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sellerlogin</title>
       <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="{{ route('seller.login') }}" class="w-50 mx-auto shadow-lg p-5 mt-3">
        <div class="mt-4 mb-4">
            <a href="/" class="text-center ">
                <h2 style="font-family: cursive;color:rgb(169, 126, 17);text-decoration:none;">Elegant<span class="text-dark">gift shop</span> </h2>
            </a>
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </div>
        @csrf

        <!-- Email Address -->
        <div> 
              <x-input-label for="email" :value="__('Email')" />
            <input type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
         
            {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded  border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400"> <b style="font-family: cursive;color:rgb(169, 126, 17);">{{ __('Remember me') }}</b> </span>
            </label>
        </div>
        @if (Route::has('password.request'))
        <a  href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif
        <div class="mx-auto mt-5">
           <button class="mb-5 btn  btn-sm border-0 rounded-pill px-md-5 animated bounceInLeft"  style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">  {{ __('Log in') }}</button> 
        </div>

        <div class="text-dark mb-5 "> <b  style="font-family: cursive;color:rgb(169, 126, 17);">Dont have an account?</b>
          <button class="btn btn-light "> @if (Route::has('register'))
            <a href="{{ route('seller.register') }}"class="btn  btn-sm border-0 rounded-pill py-1 px-1 px-md-5 animated bounceInLeft" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-light" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Register</a>
        @endif </button> 
        </div>
      
            <button class="btn btn-light ">
              <a href="/" class="btn  btn-sm border-0 rounded-pill py-1 px-1 px-md-5 animated bounceInLeft" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-light" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Back</a>
         </button> 
          
    </form>
</body>
</html>


