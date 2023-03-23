<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class formcontroller extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function register(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        $student = new Student;
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->password = md5($request['password']);
        $student->save();
        return redirect('/form');
    }
    public function view(){
        $students = Student::all();
        // echo "<pre>";
        // print_r($students);
        $data = compact('students');
        return view('student-view')->with($data);

    }
    public function delete($id){
        // echo $id;
        // die;
        $student = Student::find($id);
        if(!is_null($student)){
            $student->delete();
        }
        return redirect('form');
        // echo "<pre>";
        // print_r($st);
    //   Student::find($id)->delete();
    
    //   return redirect()->back();
    }
    public function edit($id) {
        $stu = Student::find($id);
        if(is_null($stu)) {
            // not found
            return redirect('form');
        } else {
            // $url = url('/form/update'). "/".$id;
          
            $data = compact('register');
            return view('register')->with($data);
        }

    }
}
