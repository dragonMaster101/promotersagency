<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function index(){
            return view('admindashboard.index');
        }

        public function managejobs(){
            return view('admindashboard.managejobs');
        }

        public function createjob(){
            return view('admindashboard.createjobs');
        }

        public function manageresume(){
            return view('admindashboard.manageresume');
        }
}
