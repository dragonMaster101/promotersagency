@extends('layouts.admindashboardlayout')
@section('content')
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Manage Resume</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Manage Candidates</a></li>
                    <li class="breadcrumb-item active">Manage Resume</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <!-- /row -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="pull-right">
                                <select class="form-control">
                                    <option>Short By</option>
                                    <option>Ascending</option>
                                    <option>Descending</option>
                                    <option>Most Popular</option>
                                </select>
                            </div>
                            <input type="text" class="form-control wide-width" placeholder="Search & type" />
                        </div>

                        <div class="card-body">
                            <ul class="list">
                                <li class="manage-list-row clearfix">
                                    <div class="job-info">
                                        <div class="job-img">
                                            <img src="{{asset('userdashboard/assets/img/user-1.jpg')}}" class="attachment-thumbnail" alt="Academy Pro Theme">
                                        </div>
                                        <div class="job-details">
                                            <h3 class="job-name"><a class="job_name_tag" href="#">Adam L. Mock</a></h3>
                                            <small class="job-company"><i class="ti-home"></i>Web Designer</small>
                                            <small class="job-sallery"><i class="ti-time"></i>3 Year Ex.</small>
                                            <small class="job-sallery"><i class="ti-location-pin"></i>London</small>
                                            <div class="shortlisted-can">shortlisted</div>
                                            <div class="candi-skill">
                                                <span class="skill-tag">css</span>
                                                <span class="skill-tag">HTML</span>
                                                <span class="skill-tag">Photoshop</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <a href="#" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="Download Resume"><i class="ti-download"></i></a>
                                        <a href="#SendMessage"  data-toggle="modal" class="btn btn-blue manage-btn" data-toggle="tooltip" data-placement="top" title="Message"><i class="ti-email"></i></a>
                                        <a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="Remove"><i class="ti-close"></i></a>
                                    </div>
                                </li>

                                <li class="manage-list-row clearfix">
                                    <div class="job-info">
                                        <div class="job-img">
                                            <img src="{{asset('userdashboard/assets/img/user-2.jpg')}}" class="attachment-thumbnail" alt="Academy Pro Theme">
                                        </div>
                                        <div class="job-details">
                                            <h3 class="job-name"><a class="job_name_tag" href="#">Shriya Rukwai</a></h3>
                                            <small class="job-company"><i class="ti-home"></i>Project Manager</small>
                                            <small class="job-sallery"><i class="ti-time"></i>4 Year Ex.</small>
                                            <small class="job-sallery"><i class="ti-location-pin"></i>United State</small>
                                            <div class="shortlisted-can">shortlisted</div>
                                            <div class="candi-skill">
                                                <span class="skill-tag">css</span>
                                                <span class="skill-tag">HTML</span>
                                                <span class="skill-tag">Photoshop</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <a href="#" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="Download Resume"><i class="ti-download"></i></a>
                                        <a href="#SendMessage"  data-toggle="modal" class="btn btn-blue manage-btn" data-toggle="tooltip" data-placement="top" title="Message"><i class="ti-email"></i></a>
                                        <a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="Remove"><i class="ti-close"></i></a>
                                    </div>
                                </li>

                                <li class="manage-list-row clearfix">
                                    <div class="job-info">
                                        <div class="job-img">
                                            <img src="{{asset('userdashboard/assets/img/user-4.jpg')}}" class="attachment-thumbnail" alt="Academy Pro Theme">
                                        </div>
                                        <div class="job-details">
                                            <h3 class="job-name"><a class="job_name_tag" href="#">Ushwan Uslaf</a></h3>
                                            <small class="job-company"><i class="ti-home"></i>Web Developer</small>
                                            <small class="job-sallery"><i class="ti-time"></i>4 Year Ex.</small>
                                            <small class="job-sallery"><i class="ti-location-pin"></i>United State</small>
                                            <div class="shortlisted-can">shortlisted</div>
                                            <div class="candi-skill">
                                                <span class="skill-tag">css</span>
                                                <span class="skill-tag">HTML</span>
                                                <span class="skill-tag">Photoshop</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <a href="#" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="Download Resume"><i class="ti-download"></i></a>
                                        <a href="#SendMessage"  data-toggle="modal" class="btn btn-blue manage-btn" data-toggle="tooltip" data-placement="top" title="Message"><i class="ti-email"></i></a>
                                        <a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="Remove"><i class="ti-close"></i></a>
                                    </div>
                                </li>

                                <li class="manage-list-row clearfix">
                                    <div class="job-info">
                                        <div class="job-img">
                                            <img src="{{asset('userdashboard/assets/img/user-5.jpg')}}" class="attachment-thumbnail" alt="Academy Pro Theme">
                                        </div>
                                        <div class="job-details">
                                            <h3 class="job-name"><a class="job_name_tag" href="#">Riya Rajputr</a></h3>
                                            <small class="job-company"><i class="ti-home"></i>Team Lead</small>
                                            <small class="job-sallery"><i class="ti-time"></i>8 Year Ex.</small>
                                            <small class="job-sallery"><i class="ti-location-pin"></i>United State</small>
                                            <div class="shortlisted-can">shortlisted</div>
                                            <div class="candi-skill">
                                                <span class="skill-tag">css</span>
                                                <span class="skill-tag">HTML</span>
                                                <span class="skill-tag">Photoshop</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <a href="#" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="Download Resume"><i class="ti-download"></i></a>
                                        <a href="#SendMessage"  data-toggle="modal" class="btn btn-blue manage-btn" data-toggle="tooltip" data-placement="top" title="Message"><i class="ti-email"></i></a>
                                        <a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="Remove"><i class="ti-close"></i></a>
                                    </div>
                                </li>

                                <li class="manage-list-row clearfix">
                                    <div class="job-info">
                                        <div class="job-img">
                                            <img src="{{asset('userdashboard/assets/img/user-6.jpg')}}" class="attachment-thumbnail" alt="Academy Pro Theme">
                                        </div>
                                        <div class="job-details">
                                            <h3 class="job-name"><a class="job_name_tag" href="#">Mo. Raj Mishra</a></h3>
                                            <small class="job-company"><i class="ti-home"></i>Java Developer</small>
                                            <small class="job-sallery"><i class="ti-time"></i>6 Year Ex.</small>
                                            <small class="job-sallery"><i class="ti-location-pin"></i>United State</small>
                                            <div class="shortlisted-can">shortlisted</div>
                                            <div class="candi-skill">
                                                <span class="skill-tag">css</span>
                                                <span class="skill-tag">HTML</span>
                                                <span class="skill-tag">Photoshop</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-buttons">
                                        <a href="#" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="Download Resume"><i class="ti-download"></i></a>
                                        <a href="#SendMessage"  data-toggle="modal" class="btn btn-blue manage-btn" data-toggle="tooltip" data-placement="top" title="Message"><i class="ti-email"></i></a>
                                        <a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="Remove"><i class="ti-close"></i></a>
                                    </div>
                                </li>

                            </ul>

                            <div class="flexbox padd-10">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="ti-arrow-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="ti-arrow-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    <!-- /#page-wrapper -->
@endsection
    <!-- Send Message -->
{{--    <div id="SendMessage" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header theme-bg">
                        <h4 class="modal-title">Send Message</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control big-height"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>--}}
