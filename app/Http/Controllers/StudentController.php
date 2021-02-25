<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function index()
    {
        //
    }

 
    public function create()
    {
        
    }


    public function store(Request $request)
    {
      
        $this->validate($request,[
            'name'=>'required|min:3|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'surname'=>'required|min:3|max:255|regex:/^[a-zA-Z0-9\s]+$/',    
            ]);
                $projectId=$request->project_id;
                // dd($projectId);
            Student::create([
                'name'=>$request->name,
                'surname'=>$request->surname,    
                'project_id'=>$projectId,
                'group_id'=>$request->group_id,

            ]);
            return redirect()->back()->with('storeStatus', 'Successfully added student!');

    }

   
    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

  
    public function update(Request $request, Student $student)
    {
            
    }



    public function removeFromGroup(Request $request, Student $student) {
        $student->update([
            'group_id'=> null
        ]);
        return redirect()->back()->with('storeStatus', 'Student removed from the group');
    }

    public function assignToGroup(Request $request) {
      
        if(!$request->student_id) {
            return redirect()->back();
        }
        $student = Student::where('id', $request->student_id)->get();
        $student[0]->update([
            'group_id'=>$request->group_id
        ]);

        return redirect()->back()->with('storeStatus', 'Student Assigned to the group ');
    }


 


    public function destroy(Student $student)
    {
        try {
           
            
            $student->delete();
          
            return redirect()->back()->with('storeStatus', 'Successfully deleted');
        }        
        catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors(['Failed to delete']);
            
        }
    }
}
