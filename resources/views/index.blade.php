@extends('layouts.promoterslayout')
@section('content')
    <!-- Main Banner Section Start -->
    <section class="slide-banner scroll-con-sec hero-section" data-scrollax-parent="true" id="search">
        <div class="slideshow-container">
            <!-- slideshow-item -->
            <div class="slideshow-item">
                <div class="bg"  data-bg="{{asset('img/bg2.jpg')}}"></div>
            </div>
            <!--  slideshow-item end  -->
            <!-- slideshow-item -->
            <div class="slideshow-item">
                <div class="bg"  data-bg="{{asset('img/bg3.jpg')}}"></div>
            </div>
            <!--  slideshow-item end  -->
            <!-- slideshow-item -->
            <div class="slideshow-item">
                <div class="bg"  data-bg="{{asset('img/bg1.jpg')}}"></div>
            </div>
            <!--  slideshow-item end  -->
        </div>
        <div class="overlay"></div>
        <div class="hero-section-wrap fl-wrap">
            <div class="container">
                <div class="intro-item fl-wrap">
                    <div class="caption text-center cl-white">
                        <h2>Looking for a job ?</h2>
                        <p>Expolore job postings of top rated maldvian companies</p>
                    </div>

                    <form class="form-horizontal">
                        <div class="col-md-10 no-padd" id="jobsearch">
                            <div class="input-group">
                                <input type="text" class="form-control br-1" placeholder="Skills, Designations, Companies" required>
                            </div>
                        </div>

                        <div class="col-md-2 no-padd">
                            <div class="input-group">
                                <button type="submit" class="btn btn-success full-width">Search Job</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Banner Section End -->
    <div class="clearfix"></div>

    <!-- Top Features Section Start-->
    <section class="first-feature">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Categories</p>
                    <h2>Our Broad <span>Fields</span></h2>
                </div>
            </div>
            <div class="all-features">

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Web Developer</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Mobile Developer</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Creative Designer</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Content Writer</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-hdd-o"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Manager</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Sales & Marketing</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Accountant</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 small-padding">
                    <div class="job-feature">
                        <div class="feature-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="feature-caption">
                            <h5>Management / HR</h5>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Top Features Section End-->


    <!-- Work Process Counter Section Start -->
    <section class="wp-process home-three">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>How We Work</p>
                    <h2>Our Work <span>Process</span></h2>
                </div>
            </div>
            <!--/row-->

            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon">
                        <span class="icon-search"></span>
                    </div>
                    <div class="work-process-caption">
                        <h4>Search Job</h4>
                        <p>Through promotersagency you can search for job a job listing that appeals to your needs.</p>
                    </div>
                </div>

                <div class="work-process">
                    <div class="work-process-icon">
                        <span class="icon-mobile"></span>
                    </div>
                    <div class="work-process-caption">
                        <h4>Find Job</h4>
                        <p>When you find a job posting that interests you you can apply via the apply now link.</p>
                    </div>
                </div>

                <div class="work-process">
                    <div class="work-process-icon">
                        <span class="icon-profile-male"></span>
                    </div>
                    <div class="work-process-caption">
                        <h4>Get Hired</h4>
                        <p>Once you apply, we will contact you for the interviews and any other briefings.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 hidden-sm">
                <img src="assets/img/wp-iphone.png" class="img-responsive" alt="" />
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="work-process">
                    <div class="work-process-icon">
                        <span class="icon-layers"></span>
                    </div>
                    <div class="work-process-caption">
                        <h4>Start Work</h4>
                        <p>Once your are successfully hired for the job, you can begin to work.</p>
                    </div>
                </div>

                <div class="work-process">
                    <div class="work-process-icon">
                        <span class="icon-wallet"></span>
                    </div>
                    <div class="work-process-caption">
                        <h4>Pay Money</h4>
                        <p>Just like any other job you will get paid once every month.</p>
                    </div>
                </div>

                <div class="work-process">
                    <div class="work-process-icon">
                        <span class="icon-happy"></span>
                    </div>
                    <div class="work-process-caption">
                        <h4>Happy</h4>
                        <p>Congratulations, now youre gaining valuable experience to set you up for your dream job.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- start Call To Action section -->
    <div class="clearfix"></div>
    <section class="call-to-act">
        <div class="container-fluid">
            <div class="col-md-6 col-sm-6 no-padd bl-dark">
                <div class="call-to-act-caption">
                    <h2>Do not have experience to get your dream job ?</h2>
                    <h3>We will help you gain valuable experience in the field of your interest so that you can get job you have been dreaming to get. Get on board with us today.</h3>
                    <a href="#" class="btn bat-call-to-act">Join Us</a>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 no-padd gr-dark">
                <div class="call-to-act-caption">
                    <h2>Looking to hire employees for your outsourcing needs ?</h2>
                    <h3>Get intouch with us and we can help you with meeting the staffing needs of your organization. To get started, simply drop us a message.</h3>
                    <a href="{{url('/contact')}}" class="btn bat-call-to-act">Get In Touch</a>
                </div>
            </div>

        </div>
    </section>
    <!-- Call To Action section End -->

    <!-- ========== Begin: Brows job Category ===============  -->
    <section class="brows-job-category">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Check Out Our</p>
                    <h2>Most Recent <span>Job Postings</span></h2>
                </div>
            </div>
            <!--/.row-->

            <div class="row">
                <div class="col-md-12">

                    <!-- Single Job List -->
                    <div class="item-click">
                        <article>
                            <div class="brows-job-list">
                                <div class="col-md-1 col-sm-2 small-padding">
                                    <div class="brows-job-company-img">
                                        <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-5">
                                    <div class="brows-job-position">
                                        <a href="{{url('/jobdetails')}}"><h3>Field Sales Officer</h3></a>
                                        <p>
                                            <span>Ooredoo</span><span class="brows-job-sallery"><i class="fa fa-money"></i>MVR 3000 - 4000</span>
                                            <span class="job-type cl-success bg-trans-success">Full Time</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i>Hulhumale</p>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2">
                                    <div class="brows-job-link">
                                        <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                    </div>
                                </div>

                            </div>
                        </article>
                    </div>

                  <!-- Single Job List -->
                    <div class="item-click">
                        <article>
                            <div class="brows-job-list">
                                <div class="col-md-1 col-sm-2 small-padding">
                                    <div class="brows-job-company-img">
                                        <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="brows-job-position">
                                        <a href="{{url('/jobdetails')}}"><h3>Risk Analyst</h3></a>
                                        <p>
                                            <span>Bank Of Maldives</span><span class="brows-job-sallery"><i class="fa fa-money"></i>MVR 2000 - 3000</span>
                                            <span class="job-type bg-trans-warning cl-warning">Part Time</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i>Male'</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="brows-job-link">
                                        <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Single Job List -->
                    <div class="item-click">
                        <article>
                            <div class="brows-job-list">
                                <div class="col-md-1 col-sm-2 small-padding">
                                    <div class="brows-job-company-img">
                                        <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="brows-job-position">
                                        <a href="{{url('/jobdetails')}}"><h3>Account Officer</h3></a>
                                        <p>
                                            <span>Beach Wood Hotel</span><span class="brows-job-sallery"><i class="fa fa-money"></i>MVR 5000 - 7000</span>
                                            <span class="job-type bg-trans-primary cl-primary">Fulltime</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i>Male'</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="brows-job-link">
                                        <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    {{--       <!-- Single Job List -->
                         <div class="item-click">
                             <article>
                                 <div class="brows-job-list">
                                     <div class="col-md-1 col-sm-2 small-padding">
                                         <div class="brows-job-company-img">
                                             <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-sm-5">
                                         <div class="brows-job-position">
                                             <a href="{{url('/jobdetails')}}"><h3>Financial Analyst</h3></a>
                                             <p>
                                                 <span>Microsoft</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$580 - 600</span>
                                                 <span class="job-type bg-trans-success cl-success">Full Time</span>
                                             </p>
                                         </div>
                                     </div>
                                     <div class="col-md-3 col-sm-3">
                                         <div class="brows-job-location">
                                             <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2">
                                         <div class="brows-job-link">
                                             <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                         </div>
                                     </div>
                                 </div>
                             </article>
                         </div>

                         <!-- Single Job List -->
                         <div class="item-click">
                             <article>
                                 <div class="brows-job-list">
                                     <div class="col-md-1 col-sm-2 small-padding">
                                         <div class="brows-job-company-img">
                                             <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-sm-5">
                                         <div class="brows-job-position">
                                             <a href="{{url('/jobdetails')}}"><h3>Service Representative</h3></a>
                                             <p>
                                                 <span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$800 - 900</span>
                                                 <span class="job-type bg-trans-denger cl-danger">Enternship</span>
                                             </p>
                                         </div>
                                     </div>
                                     <div class="col-md-3 col-sm-3">
                                         <div class="brows-job-location">
                                             <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2">
                                         <div class="brows-job-link">
                                             <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                         </div>
                                     </div>
                                 </div>
                             </article>
                         </div>

                         <!-- Single Job List -->
                         <div class="item-click">
                             <article>
                                 <div class="brows-job-list">
                                     <div class="col-md-1 col-sm-2 small-padding">
                                         <div class="brows-job-company-img">
                                             <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-sm-5">
                                         <div class="brows-job-position">
                                             <a href="{{url('/jobdetails')}}"><h3>Chief Executive Officer</h3></a>
                                             <p>
                                                 <span>Google</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$510 - 700</span>
                                                 <span class="job-type bg-trans-success cl-success">Full Time</span>
                                             </p>
                                         </div>
                                     </div>
                                     <div class="col-md-3 col-sm-3">
                                         <div class="brows-job-location">
                                             <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2">
                                         <div class="brows-job-link">
                                             <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                         </div>
                                     </div>
                                 </div>
                             </article>
                         </div>

                         <!-- Single Job List -->
                         <div class="item-click">
                             <article>
                                 <div class="brows-job-list">
                                     <div class="col-md-1 col-sm-2 small-padding">
                                         <div class="brows-job-company-img">
                                             <a href="{{url('/jobdetails')}}"><img src="http://via.placeholder.com/150x150" class="img-responsive" alt="" /></a>
                                         </div>
                                     </div>
                                     <div class="col-md-6 col-sm-5">
                                         <div class="brows-job-position">
                                             <a href="{{url('/jobdetails')}}"><h3>Administrative Manager</h3></a>
                                             <p>
                                                 <span>Honda</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$700 - 800</span>
                                                 <span class="job-type bg-trans-warning cl-warning">Part Time</span>
                                             </p>
                                         </div>
                                     </div>
                                     <div class="col-md-3 col-sm-3">
                                         <div class="brows-job-location">
                                             <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                         </div>
                                     </div>
                                     <div class="col-md-2 col-sm-2">
                                         <div class="brows-job-link">
                                             <a href="{{url('/jobdetails')}}" class="btn btn-default">Apply Job</a>
                                         </div>
                                     </div>
                                 </div>
                             </article>
                         </div>--}}

                </div>
            </div>

            <div class="row">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>

        </div>
    </section>
    <!-- ========== Begin: Brows job Category End ===============  -->

    <!-- Download app Section Start -->

    <!-- Download app Section End -->

    <!-- Footer Section Start -->
 @endsection