

<x-guest-layout>

    <form method="POST" action="{{ route('register') }}"  class="w-50 mx-auto shadow-lg p-5">
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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" style="font-family: cursive; color:rgb(169, 126, 17);">
                {{ __('Already registered?') }}
            </a>

            
            <x-primary-button class="btn btn-primary btn-sm border-0 rounded-pill px-md-5 animated bounceInLeft" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">
                    {{ __('Register') }} 
             
            </x-primary-button>
            <button class="btn btn-light ">
                <a href="/" class="btn  btn-sm border-0 rounded-pill py-1 px-1 px-md-5 animated bounceInLeft" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-light" style="font-family: cursive;background-color:rgb(169, 126, 17); color:white;">Back</a>
           </button> 
    </form>
</x-guest-layout>
