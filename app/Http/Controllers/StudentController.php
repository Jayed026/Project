<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('index')->with('students', $students);
    }
    public function create(){
        
        return view('create');
    }
    public function edit($id){
       $studnet= Student::find($id);
        return view('edit')->with('student', $student);
    }
    public function store(Request $request){
        
        $student= new Student;
        $student->name = $request->name;
        $student->department_name = $request->dept;
        $student->registration_id = $request->reg_id;
        $student->info = $request->info;
        $student->save();

        return redirect()->route('index');
    }
    public function update(Request $request, $id){
        
        $student= new Student;
        return redirect()->route('index');
    }


}
