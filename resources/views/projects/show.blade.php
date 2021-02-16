@extends('layouts.app')

@section('content')



   
   <!-- MAIN SECTION -->
   <div class="w-full">
    <p class="text-2xl mx-auto my-2 text-center"> Project title </p>
    
<div class="w-11/12 mx-auto">
    <p>Groups for this project: 5</p>
    <p>Maximum students per group: 4</p>
</div>

    <!-- ALL STUDENTS IN THIS PROJECT -->

    <div class="border-2 w-11/12 min-h-20 mx-auto my-3 md:w-100"> 
        <p class="bg-gray-200 text-center"> Students in this project</p>
        <div class=" my-3  flex flex-row flex-wrap justify-evenly">
            <p class="mx-2">Jonas Petraiis</p>
            <p class="mx-2">Group #5</p>
            <form action="">
                <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
            </form>     
        </div>



        <div class=" my-3  flex flex-row flex-wrap justify-evenly">
            <p class="mx-2">Jonas Petraiis</p>
            <p class="mx-2">Group #5</p>
            <form action="">
                <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
            </form>     
              

            
        </div>



        <div class=" my-3  flex flex-row flex-wrap justify-evenly">
            <p class="mx-2">Jonas Petraiis</p>
            <p class="mx-2">Group #5</p>
            <form action="">
                <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
            </form>     
        </div>

        
    </div>

    



    <!-- ALL STUDENTS IN THIS PROJECT -->


<!-- GROUPS SECTION  -->
<div class="grid grid-cols-1 xl:grid-cols-2">
    @foreach ($groups as $group)
        
    <div class="border-2 w-11/12 min-h-20 mx-auto my-3 md:w-80">
    <p class="bg-gray-200 text-center">Group #1</p>
    <div class="flex flex-row items-center justify-between w-11/12 mx-auto my-2">
        <p class="mx-2">Jonas Petras</p>
        <form action="">
            <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
        </form>                   
        
    </div>

    <div class="flex flex-row items-center justify-between w-11/12 mx-auto my-2">
        <p class="mx-2">Jonas Petras</p>
        <form action="">
            <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
        </form>                   
        
    </div>

    <div class="flex flex-row items-center justify-between w-11/12 mx-auto my-2">
        <p class="mx-2">Jonas Petras</p>
        <form action="">
            <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
        </form>                   
        
    </div>
     
    <div class="flex justify-center" >
        <form class="flex flex-row items-center justify-between w-11/12 mx-auto my-2" action="">
            <select name="" id="">
                <option value="">Assign sturednt</option>
                <option value=""> Petras Jonaitis</option>
                <option value="">Jonas petraitis</option>

            </select>
            <button class="h-6 w-18 p-1 text-xs bg-blue-300 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Assign Student</button>
        </form> 
    </div>
</div>
    @endforeach



</div>
            <!-- GROUPS SECTION  -->

</div>

<!-- MAIN SECTION -->


</div>

@endsection
