@extends('layouts.app')

@section('content')


    <!-- MAIN SECTION -->
    <div class="w-full">

@if (session('storeStatus'))
<div class="w-11/12 h-10 bg-green-200 text-green-500 flex flex-row flex-wrap mt-5"> 
   <p> {{session('storeStatus')}}</p>            
   
</div>
   @endif
   @if ($errors->any())
    <div class="w-11/12 h-10 bg-red-200 text-red-500 flex flex-row flex-wrap"> 
        @foreach ($errors->all() as $error)
        <p> {{$error}}</p> <br>

    @endforeach
</div>
       @endif
        <p class="text-2xl mx-auto my-2 text-center">Your projects</p>
        
        <div class="flex justify-center" >
            <a class="flex flex-row items-center my-3" href="{{route('project.create')}}">
                <img class="icon mx-2" src="./assets/icons/add.svg" alt=""> <span>Add New Project</span>
            </a>
        </div>

        <div>
            <div class="flex flex-row justify-between w-11/12 mx-auto items-center my-4 max-w-lg md:max-w-none">
                <p>Winter photoShoot</p>
                <a class="flex items-center justify-center text-sm bg-indigo-500 text-gray-100 p-1 h-8 w-28 rounded-full tracking-wide
                focus:outline-none focus:shadow-outline hover:bg-indigo-600
                shadow-lg" href="{{route('project.show')}}">More details</a>
            </div>

            <div class="flex flex-row justify-between w-11/12 mx-auto items-center my-4 max-w-lg md:max-w-none">
                <p>Winter photoShoot</p>
                <a class="flex items-center justify-center text-sm bg-indigo-500 text-gray-100 p-1 h-8 w-28 rounded-full tracking-wide
                focus:outline-none focus:shadow-outline hover:bg-indigo-600
                shadow-lg" href="">More details</a>
            </div>

            <div class="flex flex-row justify-between w-11/12 mx-auto items-center my-4 max-w-lg md:max-w-none">
                <p>Winter photoShoot</p>
                <a class="flex items-center justify-center text-sm bg-indigo-500 text-gray-100 p-1 h-8 w-28 rounded-full tracking-wide
                focus:outline-none focus:shadow-outline hover:bg-indigo-600
                shadow-lg" href="">More details</a>
            </div>

               <div class="flex flex-row justify-between w-11/12 mx-auto items-center my-4 max-w-lg md:max-w-none">
                <p>Winter photoShoot</p>
                <a class="flex items-center justify-center text-sm bg-indigo-500 text-gray-100 p-1 h-8 w-28 rounded-full tracking-wide
                focus:outline-none focus:shadow-outline hover:bg-indigo-600
                shadow-lg" href="">More details</a>
            </div>
          
            

        </div>
    </div>

    <!-- MAIN SECTION -->


</div>




@endsection
