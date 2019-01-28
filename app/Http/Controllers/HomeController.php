<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(empty(Auth::user()->isAdmin ==1)){
            return view('userdashboard.userhome');
        }
        if(Auth::user()->isAdmin ==1){
            //return view('admindashboard.index');
            return redirect('/admin/home');
        }
        return view('userdashboard.userhome');
    }

    public function createResume(){
        return view('userdashboard.resume.createresume');
    }

    public function userProfile(){
        return view('userdashboard.userprofile');
    }

}
