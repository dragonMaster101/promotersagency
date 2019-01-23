<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('userdashboard.userhome');
    }

    public function createResume(){
        return view('userdashboard.resume.createresume');
    }

    public function userProfile(){
        return view('userdashboard.userprofile');
    }

}
