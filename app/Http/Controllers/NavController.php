<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
        return view('index');
        }

    public function signin(){
        return view('signin');
    }

    public function browsejobs(){
        return view('browsejob');

    }

    public function jobdetail(){
        return view('jobdetails');
    }

    public function signup(){
        return view('signup');
    }

    public function contact(){
        return view('contact');
    }
}
