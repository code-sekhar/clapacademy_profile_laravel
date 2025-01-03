

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portfolio Dashboard</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-4 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body px-0">
                    <!-- Portfolio Indicator-->
                    <div class="d-flex align-items-center justify-content-between px-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-5 mr-2" width="48" height="48" src="{{asset('assets/img/team/user_profile.png')}}">
                            <div class="ms-4">
                                <div class="small">Hello <b>Abel</b></div>
                                <div class="text-xs text-muted">Portfolio Strength</div>
                             </div>

                        </div>
                        <div class="col-auto">
                            <i class="fa fa-arrow-right fa-1x text-gray-300" aria-hidden="true"></i>

                        </div>
                        {{--Two Item same line
                         <div class="ms-4 small">
                            <div class="badge bg-light text-dark me-3">Default</div>
                            <a href="#!">Edit</a>
                        </div> --}}
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="row no-gutters align-items-center">

                                <div class="col indicator_bar">
                                    <div class="progress progress-sm mr-3">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <span class="mr-3">0%</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Illustrations -->


            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-2" style="width: 13rem;"
                        src="{{asset('user/img/undraw_posting_photo.svg')}}" alt="das_image">
                </div>
                <div class="card-body">
                    <p><strong> Getting Started.</strong>
                    <br/>
                    Begin by following these easy steps. <i class="fa fa-arrow-right fa-1x text-gray-300 mr-10" aria-hidden="true" style="float: right"></i></p>
                 </div>

            </div>

        </div>

        <!-- Earnings (Monthly) Card Example -->


        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-7 col-md-6 mb-4">
            <div class="card shadow py-2">
                <div class="card-body">
                    <h5 class="h5 mb-0 text-gray-800">Portfolio Progress</h5>
                    <div class="row dash_section2">
                        <div class="card bg-light text-black block">
                            <div class="card-body h5 mb-3 font-weight-bold text-gray-800">
                                0
                                <div class="text-black-50 small">Project created</div>
                            </div>
                        </div>
                        <div class="card bg-light text-black block">
                            <div class="card-body h5 mb-3 font-weight-bold text-gray-800">
                                0
                                <div class="text-black-50 small">Post engagements</div>
                            </div>
                        </div>
                        <div class="card bg-light text-black block">
                            <div class="card-body h5 mb-3 font-weight-bold text-gray-800">
                                0
                                <div class="text-black-50 small">Followers</div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="text-center ml-5 mr-5 mt-20">
                        <p class="h5 mb-0 font-weight-bold text-gray-800">You'll see your progress here when you upload projects</p>
                        <p class="mb-0">Start uploading your project and let the world follow your work</p>
                        <br/>
                        <button class="button_action rounded-pill">Create Project</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        {{-- <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>



</div>
