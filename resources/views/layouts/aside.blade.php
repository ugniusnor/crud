<div class="main-dashboard grid grid-cols-1 w-full max-w-screen-2xl md:grid-cols-2 md:min-h-screen">
    <!-- ASIDE SECTION -->
    <div class="rounded-xl my-2 aside w-full bg-blue-100 md: w-5/12 md:max-w-xs">
        <div style="background-image:url({{asset('assets/img/defaultAvatar.svg')}}) " class="avatar-section mx-auto my-4 w-28 h-28 border-sm-black rounded-full border-2 border-current">
            
        </div>
       <div class="flex flex-row justify-center w-full ">     
        <a class="hover:bg-gray-200 w-full text-center my-3 p-2 flex flex-row justify-center items-center" href="#">
           <div class="flex flex-row w-40 justify-start items-start">
            <img class="icon mx-2" src={{asset('assets/icons/home.svg')}} alt="home-icon">   
            <span class="mx-2">Home</span>
           </div>
        </a>
       </div>
     
       <div class="flex flex-row justify-center w-full ">     
        <a class="hover:bg-gray-200 w-full text-center my-3 p-2 flex flex-row justify-center items-center" href="{{route('group.index')}}">
           <div class="flex flex-row w-40 justify-start items-start">
            <img class="icon mx-2" src={{asset('assets/icons/sketch.svg')}} alt="">   
            <span class="mx-2">My groups</span>
           </div>
        </a>
       </div>

       <div class="flex flex-row justify-center w-full ">     
        <a class="hover:bg-gray-200 w-full text-center my-3 p-2 flex flex-row justify-center items-center" href="{{route('project.index')}}">
           <div class="flex flex-row w-40 justify-start items-start">
            <img class="icon mx-2" src={{asset('assets/icons/optimization.svg')}}  alt="">   
            <span class="mx-2">My projects</span>
           </div>
        </a>
       </div>

       <div class="flex flex-row justify-center w-full ">     
        <a class="hover:bg-gray-200 w-full text-center my-3 p-2 flex flex-row justify-center items-center" href="#">
           <div class="flex flex-row w-40 justify-start items-start">
            <img class="icon mx-2" src={{asset('assets/icons/film-review.svg')}}  alt="">   
            <span class="mx-2">My Account</span>
           </div>
        </a>
       </div>
      
    </div>
    <!-- ASIDE SECTION -->