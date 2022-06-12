<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function signup()
    {
        return view('signup');
    }
    public function signin()
    {
        return view('signin');
    }

    public function index()
    {
        $students = Student::orderBy('id','desc')->get();
        return view('student_list', compact('students'));
    }
    public function newstudent()
    {
        return view('newstudent');
    }
    public function add(Request $data)
    {
        $student = new Student();
        $student->fullname = $data->full_name;
        $student->email = $data->email;
        $student->password = 12345;
        $student->save();

        return redirect()->back()->with('success', 'Student Added ');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        if ($student) {
            return view('edit', compact('student'));
        } else {
            return redirect('/');
        }
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->fullname = $request->full_name;
            $student->email = $request->email;
            $student->save();
            return redirect('/students')->with('success','Student Updated');
        } else {
            return redirect('/');
        }
    }
}