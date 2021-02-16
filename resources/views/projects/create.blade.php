@extends('layouts.app')

@section('content')
<div class="w-full">
    
    @if ($errors->any())
    <div class="w-11/12  bg-red-200 text-red-500 flex flex-row flex-wrap mt-5 mx-auto"> 
        @foreach ($errors->all() as $error)
        <p> {{$error}}</p> <br>
    
    @endforeach
    </div>
    @endif
    <p class="text-2xl mx-auto my-2 text-center">Creating New Project</p>
    
    <div>

        <form class="flex flex-col items-center justify-center" action={{route('project.store')}} method="POST">
            @csrf
            <label class="my-2 mx-auto w-10/12 " for="project_name"> Your Project Title </label>
            <input class="p-2 my-3 mx-auto w-10/12 border-2 focus:outline-none  focus:border-indigo-500" name="project_name" type="text"  maxlength="100" >

            <label class="my-2 mx-auto w-10/12" for="groups_number">How many groups you'll need?</label>
            <input class="p-2 my-3 mx-auto w-12 border-2 focus:outline-none  focus:border-indigo-500" name="groups_number" type="number" min="1" max="100">

            <label class="my-2 mx-auto w-10/12" for="students_per_group">How many students per group?</label>
            <input class="p-2 my-3 mx-auto w-12 border-2 focus:outline-none  focus:border-indigo-500" name="students_per_group" type="number" min="1" max="100">


            <button class="flex items-center justify-center text-sm bg-indigo-500 text-gray-100 p-1 h-8 w-28 rounded-full tracking-wide
            focus:outline-none focus:shadow-outline hover:bg-indigo-600
            shadow-lg" type="submit"> Create</button>
        </form>

    </div>
 

</div>

<!-- MAIN SECTION -->


</div>
@endsection