@extends('layouts.userdashboardlayout')
@section('content')
    <div class="container-fluid">
        <!-- /row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <form action="" method="POST">

                    @csrf
                    <!-- Personal Detail & Address -->
                    <div class="card">

                        <div class="card-header">
                            <h4>Personal Details</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-4">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name" required><span class="validity"></span>
                                </div>

                                <div class="col-sm-4">
                                    <label>Date of Birth</label>
                                    <input type="text" class="form-control" data-toggle="datepicker" name="dob" required><span class="validity"></span>
                                </div>

                                <div class="col-sm-4">
                                    <label>Nationality</label>
                                    <input type="text" class="form-control" name="nationality" required><span class="validity"></span>
                                </div>

                                <div class="col-sm-4">
                                    <label>ID/PP Number</label>
                                    <input type="text" class="form-control" pattern="[A]{1}[0-9]{6}" name="idcardno" required placeholder="[A]xxxxxx [6 digits without A]"><span class="validity"></span>
                                </div>


                            </div>
                        </div>

                    </div>

                    <!-- Contact Information -->
                    <div class="card">

                        <div class="card-header">
                            <h4>Contact Information</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-4">
                                    <label>Permanent Address</label>
                                    <input type="text" class="form-control" required placeholder="Misaaluge, M.Misaalufushi" name="permaddress"><span class="validity"></span>
                                </div>

                                <div class="col-sm-4">
                                    <label>Current Address</label>
                                    <input type="text" class="form-control" required placeholder="G.Misaaluge 1st floor, Misaalu Magu" name="curraddress"><span class="validity"></span>
                                </div>


                                <div class="col-sm-4">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required name="email"><span class="validity"></span>
                                </div>


                                <div class="col-sm-4">
                                    <label>Phone</label>
                                    <input type="tel" format="[7/9]{1}[0-9]{6}" class="form-control" required placeholder="7/9xxxxxx [7 digits]" name="phone"><span class="validity"></span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Add Qualification -->
                    <div class="card">

                        <div class="card-header">
                            <h4>Qualifications</h4>
                        </div>

                        <div class="card-body">
                            <div class="extra-field-box">
                                <div class="multi-box">
                                    <div class="dublicat-box">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <label>Name of Qualification </label>
                                                <input type="text" class="form-control" name="qualificationname" required><span class="validity"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Name of Institution </label>
                                                <input type="text" class="form-control" name="qualificationinstitution" required><span class="validity"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Date From</label>
                                                <input type="text" class="form-control" data-toggle="datepicker" name="startdate" required><span class="validity"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Date To</label>
                                                <input type="text" class="form-control" data-toggle="datepicker" name="enddate" required><span class="validity"></span>
                                            </div>

                                        </div>
                                        <button type="button" class="btn remove-field light-gray-btn">Remove</button>
                                    </div>
                                </div>
                                <div class="text-center"><button type="button" class="btn add-field btn-primary">Add More</button></div>
                            </div>
                        </div>

                    </div>

                    <!-- Experience -->
                    <div class="card">

                        <div class="card-header">
                            <h4>Experience</h4>
                        </div>

                        <div class="card-body">
                            <div class="extra-field-box">
                                <div class="multi-box">
                                    <div class="dublicat-box">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <label>Employer</label>
                                                <input type="text" class="form-control" name="employer" required><span class="validity"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" name="designation" required><span class="validity"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Date From</label>
                                                <input type="text" class="form-control" data-toggle="datepicker" name="startexpdate" required><span class="validity"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Date To</label>
                                                <input type="text" class="form-control" data-toggle="datepicker" name="endexpdate" required><span class="validity"></span>
                                            </div>

                                        </div>
                                        <button type="button" class="btn remove-field light-gray-btn">Remove</button>
                                    </div>
                                </div>
                                <div class="text-center"><button type="button" class="btn add-field btn-primary">Add More</button></div>
                            </div>
                        </div>

                    </div>

                    <!-- Resume Content -->
                   {{--<div class="card">

                        <div class="card-header">
                            <h4>Resume Content</h4>
                        </div>

                        <div class="card-body">
                            <textarea class="form-control height-120 textarea" id="resume-text" placeholder="About Company"></textarea>
                        </div>

                    </div>--}}

                    <div class="text-center">
                        <button type="submit" class="btn btn-m btn-success">Submit &amp; Exit</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- /row -->
    </div>

@endsection