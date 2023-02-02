<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    //

    public function Data(Request $clever){
         $bigbro = new Teacher();

         $bigbro->Full_Name=$clever->Full_Name; //izi za mwsh ni ktk form
         $bigbro->Address=$clever->Address;
         $bigbro-> save();
         
        return redirect('/')->with('status', 'Form successful');

    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        
        reuest ->validate([
            'Full_Name'=> 'required',
            'Address'=>'required'
        ]);
        
    }
}
