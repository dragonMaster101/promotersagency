@extends('layouts.userdashboardlayout');

@section('content')

    <div class="">
        <h1 align="center"> Welcome, {{Auth::user()->name}}</h1>
        <hr>
        <br>
        <h3 align="center">Check menu for available options, more features are on the way</h3>
    </div>

    @endsection