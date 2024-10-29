<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller Register</title>
       <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST" action="{{ route('seller.register.create') }}"  class="w-50 mx-auto">
        <div class="mt-4 mb-4">
            <a href="/" class="text-center ">
                <h2 style="font-family: cursive;color:rgb(169, 126, 17);text-decoration:none;">Elegant<span class="text-dark">gift shop</span> </h2>
            </a>
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </div>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <input type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name">
            {{-- <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <input type="email" class="form-control" name="email" :value="old('email')" required autocomplete="username">
            {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /> --}}
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
<input type="password"   name="password"
required autocomplete="new-password"  class="form-control">
            {{-- <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" /> --}}

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
<input type="password"   name="password_confirmation" required autocomplete="new-password"  class="form-control" >
            {{-- <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" /> --}}

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
      

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}"  style="font-family: cursive; color:rgb(169, 126, 17);">
                {{ __('Already registered?') }}
            </a>

            
            <x-primary-button class="btn btn-primary btn-sm border-0 rounded-pill px-md-5 animated bounceInLeft" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">
                    {{ __('Register') }} 
             
            </x-primary-button>
            <button class="btn btn-light ">
                <a href="/" class="btn  btn-sm border-0 rounded-pill py-1 px-1 px-md-5 animated bounceInLeft" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-light" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Back</a>
           </button> 
        </div>
    </form>
</body>
</html>


   

