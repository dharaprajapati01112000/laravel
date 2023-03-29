<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class formcontroller extends Controller
{
    public function index()
    {
        $url = url('/register');
        $title = "Student registration";
        $data = compact('url','title');
        return view('form')->with($data);
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
        $student = Student::all();
        // echo "<pre>";
        // print_r($students);
        $data = compact('student');
        // echo "<pre>";
        // print_r($data);
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
        // return Student::find($id);
        $student = Student::find($id);
        // return view('form',['data'=> $stu]);
        if(is_null($student)) {
            // not found
            return redirect('form');
        } else {
            $url = url('/form/update') . "/" . $id;
            $title = "Edit Student Data";
            $data = compact('student','url','title');
            // echo "<pre>";
            // print_r($data);
            return view('form')->with($data);
        }

    }
    public function update($id, Request $request){
        $student = Student::find($id);
        // $student = new Student;
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->save();
        return redirect('/form');
    }
}
