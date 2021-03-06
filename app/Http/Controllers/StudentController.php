<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('create');
    }

    public function store(Request  $request){
        $this->validate($request,[
            'firstname' =>'required',
            'lastname' =>'required',
            'email' =>'required',
            'phoneno' =>'required'

        ]);

        $student = new Student;
            $student->first_name = $request->firstname;
            $student->last_name = $request->lastname;
            $student->email = $request->email;
            $student->phone_no = $request->phoneno;
            $student->save();
            return redirect(route('home'))->with('successMsg','Student added successfully');
    }

    public function read(){
        $students = Student::paginate(4);
        return view('read',compact('students'));
    }

    public function edit($id){
        $student = Student::find($id);
        return view('update',compact('student'));
    }

    public function update(Request  $request, $id){
        $this->validate($request,[
            'firstname' =>'required',
            'lastname' =>'required',
            'email' =>'required',
            'phoneno' =>'required'

        ]);

        $student = Student::find($id);
            $student->first_name = $request->firstname;
            $student->last_name = $request->lastname;
            $student->email = $request->email;
            $student->phone_no = $request->phoneno;
            $student->save();
            return redirect(route('home'))->with('successMsg','Student record updated successfully');
    }

    public function delete($id){
        Student::find($id)->delete();
        return redirect(route('home'))->with('successMsg','Student record deleted successfully');

    }
}
