@extends('layouts.app')

@section('content')



<div class="main-wrapper">
    @if (session('storeStatus'))
    <div class="main-wrapper-action succes"> 
       <p> {{session('storeStatus')}}</p>            
       
   </div>
       @endif
       @if (session('deleteStatus'))
       <div class="main-wrapper-action succes"> 
          <p> {{session('deleteStatus')}}</p>            
          
      </div>
          @endif
       @if ($errors->any())
       <div class="main-wrapper-action err"> 
           @foreach ($errors->all() as $error)
           <p> {{$error}}</p> <br>

       @endforeach
   </div>
          @endif
   
   <!-- MAIN SECTION -->
   <div class="w-full">
    <p class="text-2xl mx-auto my-2 text-center">{{$project->project_name}} </p>
    
<div class="w-11/12 mx-auto">
    <p>Groups for this project: {{$project->groups_number}}</p>
    <p>Maximum students per group: {{$project->students_per_group}}</p>
</div>

    <!-- ALL STUDENTS IN THIS PROJECT -->

    <!-- POp up -->
<div  class="popUp border-2 border-solid absolute inset-1/2 w-5/6  max-w-xs  h-80 bg-red-200 flex justify-center items-center">
    <div class="close h-10">
        X
    </div>
    <form class="flex flex-col justify-center items-center" action="{{route('student.store')}}" method="POST">
        @csrf
        <input style="display: none" type="text" hidden="true" name="project_id" value="{{$project->id}}">
        <label for=""> Name</label>
        <input class="w-11/12 my-4" name="name" type="text">
            <label for=""> Surname</label>
        <input class="w-11/12 my-4" name="surname" type="text">
        <label for=""> Group</label>
        <select class="w-11/12" name="group_id" id="">
            <option value="">No group yet</option>
            @foreach ($project->groups as $group)
            @if (count($group->students) > $students_per_group-1)
            <option value="">Group #{{$group->group_number}} - Full</option>    
            @else
            <option value="{{$group->id}}">Group #{{$group->group_number}}</option>                
                
            @endif
            @endforeach

        </select>

        <button>click</button>
    </form>
</div>


    <div class="border-2 w-11/12 min-h-20 mx-auto my-3 md:w-100"> 
        
        <p class="bg-gray-200 text-center"> Students in this project</p>
        <div class="cursor-pointer flex flex-row items-center justify-center my-3 w-full" id="add_student">
            <img class="icon mx-2" src="{{asset('assets/icons/add.svg')}}" alt=""> <span>Add New Student</span>
        </div>
        @if ($project->students)
        @foreach ($project->students as $student)
        <div class="my-3 mx-auto w-10/12  flex flex-row flex-wrap justify-between">
            <p class="mx-2 w-2/6">{{$student->name}} {{$student->surname}}</p>
            @if ($student->group_id)
            <p class="mx-2 w-2/6">Group #{{$student->group->group_number}}</p>
                @else 
                <p class="mx-2 w-2/6">No group yet</p>
            @endif
            <form action="{{route('student.destroy',$student)}}" method="POST">
                @csrf
                <button class="h-6 w-18 p-1 text-xs bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Remove student</button>
            </form>     
        </div>
        @endforeach
        @endif





        
    </div>
    <!-- ALL STUDENTS IN THIS PROJECT -->

<!-- GROUPS SECTION  -->
<div class="grid grid-cols-1 xl:grid-cols-2">
    @foreach ($groups as $group)
        
    <div class="border-2 w-11/12 min-h-20 mx-auto my-3 md:w-80">
    <p class="bg-gray-200 text-center">Group #{{$group->group_number}}</p>
   
        @foreach ($group->students as $student)
        <div class="flex flex-row w-full justify-between items-center my-2">
            <p>{{$student->name}} {{$student->surname}} </p>
            <form action="{{route('student.removeFromGroup',$student->id)}}" method="POST">
                @csrf
                <button class="h-6 w-18 p-1 text-xs bg-green-500 text-white rounded-md focus:outline-none focus:ring-2 ring-green-300 ring-offset-2 flex items-center justify-center"> Reasign student</button>
            </form>   
        </div>

        @endforeach


        @if (range(0, ($students_per_group - (sizeof($group->students))) > 0) )
            
    
        @foreach (range(0, ($students_per_group - (sizeof($group->students))) ) as $item)

        @if ($item > 0)
        <form class="flex flex-row items-center justify-between w-full mx-auto my-2" action="{{route('student.addToGroup')}}" method="POST">
            @csrf
            <input style="display: none" type="text" hidden="true" name="group_id" id="" value="{{$group->id}}">
            <select class="w-6/12" name="student_id" id="">
                <option value="">Assign</option>
                @foreach ($project->students as $projectStudent)
                    @if (!$projectStudent->group_id)

                        <option value="{{$projectStudent->id}}">
                            {{$projectStudent->name}}           </option>
                    @endif
                @endforeach
            </select>
            <button class="h-6 w-18 p-1 text-xs bg-blue-300 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Assign Student</button>
        </form>  
        @endif

        @endforeach
        @endif




       




   
    {{-- @if ($group->students) 
        @foreach ($group->students as $student)
        <p>{{$student->name}}</p>
        @endforeach
        @else 
        <p> no</p> --}}
        {{-- @else 
        <form class="flex flex-row items-center justify-between w-11/12 mx-auto my-2" action="">
        <select name="" id="">
            <option value="">Assign</option>
        </select>
        <button class="h-6 w-18 p-1 text-xs bg-blue-300 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2 flex items-center justify-center"> Assign Student</button>
    </form>  --}}
        {{-- @endif --}}
        
            {{-- @else 
            @foreach ($project->students as $student)
            <option value="{{$student->id}}"> {{
                $student->name
            }} </option>
                            
            @endforeach
        @endif --}}
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
