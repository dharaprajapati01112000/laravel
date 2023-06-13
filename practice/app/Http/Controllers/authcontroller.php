<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    //  
    public function login(){
        // $url = url('/register');
        // $title = "Student registration";
        // $data = compact('url','title');
        return view('auth.login');
    }
    public function signup(){
        return view('auth.signUp');
    }
}
