@extends('layouts.app')

@section('content')



   
   <!-- MAIN SECTION -->
   <div class="w-full">
    <p class="text-2xl mx-auto my-2 text-center">{{$project->project_name}} </p>
    
<div class="w-11/12 mx-auto">
    <p>Groups for this project: {{$project->groups_number}}</p>
    <p>Maximum students per group: {{$project->students_per_group}}</p>
</div>

    <!-- ALL STUDENTS IN THIS PROJECT -->

    <div class="border-2 w-11/12 min-h-20 mx-auto my-3 md:w-100"> 
        
        <p class="bg-gray-200 text-center"> Students in this project</p>
        <div class="cursor-pointer flex flex-row items-center justify-center my-3 w-full" id="add_student">
            <img class="icon mx-2" src="{{asset('assets/icons/add.svg')}}" alt=""> <span>Add New Student</span>
        </div>

        @foreach ($groups as $group)
        {{-- Checking if there is any students withing groups of this project --}}
        @if ($group->students) 
        @foreach ($group->students as $student)
            
            <div class="my-3 mx-auto w-10/12  flex flex-row flex-wrap justify-between">
                <p class="mx-2 w-2/6">{{$student->name}} {{$student->surname}}</p>
                <p class="mx-2 w-2/6">Group #{{$group->group_number}}</p>
                <form action="">
                    <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
                </form>     
            </div>
            
        @endforeach        
        @endif

        
        @endforeach
        @if (!$group->students->count() > 0)
        <div class="  my-3 mx-auto w-10/12  flex flex-row flex-wrap justify-between">
            <p class="mx-auto w-10/12"> No students yet </p>

        </div>
        @endif



        
    </div>

    



    <!-- ALL STUDENTS IN THIS PROJECT -->


<!-- GROUPS SECTION  -->
<div class="grid grid-cols-1 xl:grid-cols-2">
    @foreach ($groups as $group)
        
    <div class="border-2 w-11/12 min-h-20 mx-auto my-3 md:w-80">
    <p class="bg-gray-200 text-center">Group #{{$group->group_number}}</p>
    @foreach (range(1,$project->students_per_group) as $student)
    <form class="flex flex-row items-center justify-between w-11/12 mx-auto my-2" action="">
        <select name="" id="">
            <option value="">Assign sturednt</option>
            <option value=""> Petras Jonaitis</option>
            <option value="">Jonas petraitis</option>

        </select>
        <button class="h-6 w-18 p-1 text-xs bg-blue-300 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Assign Student</button>
    </form> 
        
    @endforeach
    {{-- <div class="flex flex-row items-center justify-between w-11/12 mx-auto my-2">
        <p class="mx-2">Jonas Petras</p>
        <form action="">
            <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
        </form>                   
        
    </div> --}}

 
{{-- 
    <div class="flex flex-row items-center justify-between w-11/12 mx-auto my-2">
        <p class="mx-2">Jonas Petras</p>
        <form action="">
            <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remve student</button>
        </form>                   
        
    </div> --}}
     
    
</div>
    @endforeach



</div>
            <!-- GROUPS SECTION  -->

</div>

<!-- MAIN SECTION -->


</div>

@endsection
