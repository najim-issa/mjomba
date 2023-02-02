<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
class ShowController extends Controller
{
    //

     public function show(){

       $data=Student::all();

        return view('Report', compact('data'));
     }
}
