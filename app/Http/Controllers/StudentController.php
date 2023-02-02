<?php

namespace App\Http\Controllers;
  

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function home() {
        return view('students.form');
    }

    public function InsertData(Request $naj)
    {
              
        $kaka = new Student();

        $kaka->Full_Name=$naj->Full_Name; //izi za mwsh ni ktk form
        $kaka->User_Name=$naj->User_Name;
        $kaka->Age=$naj->Age;
        $kaka->Email=$naj->Email;
        $kaka->Phone_number=$naj->Phone_number;
        $kaka->Address=$naj->Address;
        $kaka->Password=$naj->Password;
        $kaka->Confirm_Password=$naj->Confirm_Password;
        $kaka -> save();

        return redirect('/')->with('status', 'Form successful');

       
    }

    public function reuslt(){
        $vstudent = Student::all();
        return view('students.result');
    }
}
