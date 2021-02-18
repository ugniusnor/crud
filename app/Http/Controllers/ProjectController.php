<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Group;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects =  Project::simplePaginate(20);
        
        return view("projects.index",[
            'projects'=>$projects
        ]);

   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $this->validate($request,[
            'project_name'=>'required|min:3|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'groups_number'=>'required|numeric|digits_between:1,100',    
            'students_per_group'=>'required|numeric|digits_between:1,30',
            
            ]);
          
            $id = Project::create([
                'project_name'=>$request->project_name,
                'groups_number'=>$request->groups_number,    
                'students_per_group'=>$request->students_per_group,
            ]);

                //if project is created, getting $id->id to get last submited project id and creating tables belonging to that id
            foreach ( range(1, $request->groups_number) as $index) {
                Group::create([
                    'project_id'=>$id->id,
                    'group_number'=>$index
                ]);                
            }
           
            return redirect()->route('project.index')->with('storeStatus', 'Successfully created new project!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $project=Project::where('id',$id)->get()->all();
        return view("projects.show",[
            'groups'=>Group::where('project_id',$id)->get()->all(),
            'project'=>$project[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
