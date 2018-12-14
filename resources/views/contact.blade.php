@extends('layouts.promoterslayout')
@section('content')

    <!-- Title Header Start -->
    <section class="inner-header-title" style="background-color:black;">
        <div class="container">
            <h1>Get in Touch With Us</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- Contact Page Section Start -->
    <section class="contact-page">
        <div class="container">
            <h2>Contact Channels</h2>

            <div class="col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-map-marker"></i>
                    <p>Head Office, Road<br>Male', Maldives</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-envelope"></i>
                    <p class="email">admin@promotersagency.com<br>hr@promotersagency.com</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-phone"></i>
                    <p>+960 9000009</p>
                </div>
            </div>

        </div>
    </section>
    <!-- contact section End -->

    <!-- contact form -->
    <section class="contact-form">
        <div class="container">
            <form>
                <h2>Drop A Mail</h2>

                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 col-sm-6">
                    <input type="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Phone Number" required>
                </div>

                <div class="col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Subject" required>
                </div>

                <div class="col-md-12 col-sm-12">
                    <textarea class="form-control" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-6 col-md-offset-3 col-sm-12">
                    <button type="submit" class="btn btn-success full-width">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact form End -->



   @endsection