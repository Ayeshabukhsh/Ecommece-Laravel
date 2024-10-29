@extends('masteruser')
@section('userdash')

<div class="w-75 mx-auto p-5 m-5 shadow-lg bg-white " style="margin-top:80px;">
    <h1 class="mt-5" style="font-size: 30px"> Dear User {{ Auth::user()->name }}</h1>
    <hr>
  <h1 class="text-center mb-5" style="font-size: 50px">MANAGE YOUR ACCOUNT HERE..!</h1>
 
  <h1 style="font-size: 50px;">You want to logout  <button class="btn-dark"> <form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form></button></h1>
 
 
</div>    
@endsection
