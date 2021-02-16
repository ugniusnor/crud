@extends('layouts.app')

@section('content')
<nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
        <li>
            <a class="p-3" href="{{route('home')}}">Home</a>
        </li>
        @auth
            
        <li>
            
            <a class="p-3" href="#">Dashboard</a>
        </li>
        <li>
            <a class="p-3" href="#">Post</a>
        </li>
        @endauth
    </ul>
    
    <ul class="flex items-center">
        @auth
        <li>
            <a class="p-3" href="">{{auth()->user()->name}}</a>
        </li>
        @endauth

        @guest
            
        <li>
            <a class="p-3" href="{{route('login')}}">Login</a>
        </li>
        <li>
            <a class="p-3" href="{{route('register')}}">Register</a>
        </li>
        @endguest
        @auth
        
        <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                    <button type="submit" class="p-3 inline" >Logout</button>
                </form>
        </li>
        @endauth
    </ul>
</nav>



<div style="background-image:url({{asset('assets/img/hero.jpg')}})" class="hero w-full h-96">
    <div class="absolute w-full h-full bg-gray-600 bg-opacity-50">

        <div class="hero-container h-full flex flex-col justify-center items-center z-30 text-white">
            <p class="text-2xl w-8/12 text-center md:text-5xl">Management system for teachers</p>
            <a   class="border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline" href=""> Login</a>
            
        </div>
        
        
    </div>

</div>
@endsection
