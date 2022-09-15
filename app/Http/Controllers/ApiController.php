<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request){
        $student = new Student();
        
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');

        $student->save();
        return response()->json($student);
    }

    public function show(){
        $students = Student::all();     
        return response()->json($students);
    }
    
    public function showById($id){
        $student = Student::find($id);     
        return response()->json($student);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password'); 
        $student->update();     
        return response()->json($student);
    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return response()->json($student);
    }
}
