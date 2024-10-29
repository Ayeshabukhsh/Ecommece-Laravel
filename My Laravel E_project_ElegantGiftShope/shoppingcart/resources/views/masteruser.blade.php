h<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

     <!--  Stylesheet -->
     <link href="{{url('css/style.css')}}" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .namestyle{
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid ">
            <div class="container-fluid">
                <div class="row">
                  
                <div class="col-lg-2 py-5 bg-white" style="height:100vh;">
                            
                        <ul class="nav nav-tab flex-column mt-5">
                            <li> <a href="/"><b><h2 style="font-size: 30px" class="btn btn-dark text-whitep p-3">Back to Site</h2></b></a></li>
                        <li class="nav-item mt-5"> <h2 style="font-size: 30px"><b>Wellcome {{ Auth::user()->name }}</h2> </b></li>
                       
                            <li class="nav-item active"><a href="{{route('/cartwish')}}"  class="nav-link text-dark mt-5">Your Wishlist</a></li>
                            <hr>
                            <li class="nav-item"><a href="{{route('shoppingitem.cart')}}"  class="nav-link text-dark mt-5">Your Cart items</a></li>
        <hr>
                            <li class="nav-item"><a href="myorders" class="nav-link text-dark mt-5">My Orders</a></li>
                            <hr>
                           
                        </ul>
                    </div>
                    <div class="col-lg-10 " style="background: linear-gradient(220deg,black,goldenrod)">
                        <nav x-data="{ open: false }" class=" namestyle bg-white border-b border-gray-100 dark:border-gray-700">
                            <!-- Primary Navigation Menu -->
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
                                <div class="flex justify-between h-16">
                                    <div class="flex">
                                        <!-- Logo -->
                                        {{-- <div class="shrink-0 flex items-center" >
                                            <a href="{{ route('dashboard') }}">
                                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                                            </a>
                                        </div> --}}
                        
                                        <!-- Navigation Links -->
                                        <div class="pt-2 sm:ml-10 sm:flex" >
                                            <a href="/" class="navbar-brand">
                                                <h1 class="text-primary fw-bold mb-0">Elegant<span class="text-dark">gift shop</span> </h1>
                                            </a>
                                        </div>
                                     
                                    </div>
                        
                                    <!-- Settings Dropdown -->
                                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                                        <x-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-dark fw-bold bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                                    <div>{{ Auth::user()->name }}</div>
                        
                                                    <div class="ml-1">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </x-slot>
                        
                                            <x-slot name="content">
                                                <x-dropdown-link :href="route('profile.edit')">
                                                    {{ __('Profile') }}
                                                </x-dropdown-link>
                        
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                        
                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                        
                                    <!-- Hamburger -->
                                    <div class="-mr-2 flex items-center sm:hidden">
                                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Responsive Navigation Menu -->
                            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                                <div class="pt-2 pb-3 space-y-1">
                                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-responsive-nav-link>
                                </div>
                        
                                <!-- Responsive Settings Options -->
                                <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                                    <div class="px-4">
                                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                    </div>
                        
                                    <div class="mt-3 space-y-1">
                                        <x-responsive-nav-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-responsive-nav-link>
                        
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                        
                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </nav> 
        @yield('userdash')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
