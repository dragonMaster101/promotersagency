@extends('layouts.userdashboardlayout');

@section('content')

    <div class="">
        <h1 align="center"> Welcome, {{Auth::user()->name}}</h1>
        <hr>
        <br>
        <h3 align="center">Check menu for available options, more features are on the way</h3>

        @if(Auth::user()->isAdmin == 1)
            <br><h1 align="center">You are ADMIN, proceed to <a href="{{url('/admin/home')}}">Dashboard</a> </h1>
        @endif

    </div>

    @endsection