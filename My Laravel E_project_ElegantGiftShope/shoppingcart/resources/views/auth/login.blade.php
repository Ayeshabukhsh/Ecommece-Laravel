<x-guest-layout>
 {{-- <div class="container-fluid">
    <img src="/img/banloo.png" class="img-fluid" >
 </div> --}}
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class=" container  mx-auto shadow-lg p-5 mt-4">  
    <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12"><div class="img-fluid"><img src="/img/gift.jpg" class="img-fluid" alt=""></div></div>
        <div class="col-lg-7 col-md-12 col-sm-12 shadow-lg p-5">  
            <form method="POST" action="{{ route('login') }}"  >
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
            <a  href="{{ route('password.request') }}"  style="font-family: cursive; color:rgb(169, 126, 17);">
                {{ __('Forgot your password?') }}
            </a>
        @endif
            <div class="mx-auto mt-5">
               <button class="mb-5 btn btn-primary btn-sm border-0 rounded-pill px-md-5 animated bounceInLeft"  style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">  {{ __('Log in') }}</button> 
              
            </div>
    
            <div class="text-dark mb-5 " > <b  style="font-family: cursive; color:rgb(169, 126, 17);">Dont have an account?</b>
              <button class="btn btn-light "> @if ( Route::has('register'))
                <a href="{{ route('register') }}"class="btn btn-primary btn-sm border-0 rounded-pill py-1 px-1 px-md-5 animated bounceInLeft" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-light"  style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Register</a>
            @endif </button> 
            </div>
          
            <button class="btn btn-light ">
                <a href="/" class="btn  btn-sm border-0 rounded-pill py-1 px-1 px-md-5 animated bounceInLeft" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-light" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Back</a>
           </button> 
        </form>
        <div class="mx-auto mt-5">
            <a href="{{ route('seller_login_form')}}"> <button class="mb-5 btn btn-primary btn-sm border-0 rounded-pill px-md-5 animated bounceInLef t"  style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Become a seller</button> </a>
         </div></div>
    </div>
  
   
</div>
</x-guest-layout>


