<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = \App\Student::all();
        echo phpinfo();die;
       return view('student',['students'=>$students]);
    }
}
