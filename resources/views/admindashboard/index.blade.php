@extends('layouts.admindashboardlayout')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- /row -->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="widget standard-widget">
                        <div class="row">
                            <div class="widget-caption info">
                                <div class="col-xs-4 no-pad">
                                    <i class="icon icon-briefcase"></i>
                                </div>
                                <div class="col-xs-8 no-pad">
                                    <div class="widget-detail">
                                        <h3>10</h3>
                                        <span>Jobs Posted</span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="widget-line bg-info">
                                        <span style="width:72%;" class="bg-info widget-horigental-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="widget standard-widget">
                        <div class="row">
                            <div class="widget-caption danger">
                                <div class="col-xs-4 no-pad">
                                    <i class="icon icon-happy"></i>
                                </div>
                                <div class="col-xs-8 no-pad">
                                    <div class="widget-detail">
                                        <h3>20</h3>
                                        <span>Active Members</span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="widget-line bg-danger">
                                        <span style="width:65%;" class="bg-danger widget-horigental-line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- row -->
            <div class="row">

                <!-- Area Chart -->
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-more"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right animated flipInX">
                                        <li><a href="#">This Month</a></li>
                                        <li><a href="#">Last Month</a></li>
                                        <li><a href="#">From 6 Month</a></li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="mb-0">Posted Job Stats</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline text-center m-t-40">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 cl-purple"></i>Page View</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 cl-inverse"></i>Appy Job</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 cl-success"></i>Registerd User</h5>
                                </li>
                            </ul>
                            <div class="chart" id="profile-view" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Donut Chart -->
               {{-- <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">View</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline text-center m-t-40">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 cl-inverse"></i> 12 Sales</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 cl-purple"></i> 20 Order</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 cl-success"></i> 200 Store</h5>
                                </li>
                            </ul>
                            <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                        </div>
                    </div>
                </div>--}}

            </div>
            <!-- /.row -->

            <!-- Row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="social social-box">
                        <div class="social-slick-4 facebook-box">
                            <i class="fa fa-facebook"></i>
                            <h3>1240</h3>
                            <span>Facebook Shares</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="social social-box">
                        <div class="social-slick-4 google-plus-box">
                            <i class="fa fa-google-plus"></i>
                            <h3>1872</h3>
                            <span>G Plus Shares</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="social social-box">
                        <div class="social-slick-4 twitter-box">
                            <i class="fa fa-twitter"></i>
                            <h3>1750</h3>
                            <span>Twitter Shares</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="social social-box">
                        <div class="social-slick-4 instagram-box">
                            <i class="fa fa-instagram"></i>
                            <h3>2187</h3>
                            <span>Instagra Followers</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- /#page-wrapper -->
@endsection