  <!-- Sidebar -->
  @include('userDash_template.dash_siderBar')
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('userDash_template.dash_topBar')

        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">

                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                </a> --}}
            </div>

            <!-- Content Row -->
            <div class="row">



                <!-- Creating project steps -->
                <div class="col-xl-7 col-md-6 mb-4">
                    <div class="card shadow py-2">
                        <div class="card-body">

                            <p class="h5 mb-0 text-gray-800"><strong> your data portfolio</strong></p>
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2 mb-5">
                                    <div class="row no-gutters align-items-center">

                                        <div class="col indicator_bar_steps">
                                            <div class="progress progress-sm mr-3">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div style="display: flex; justify-content: space-between;">
                                            <p style="margin-right:5em;"><strong>0%</strong></p>
                                        <span class="mr-5" style="margin-right:5em;"> 5 steps left </span>
                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div style="float:right">
                                <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                            </div>

                            <div class="footer-container">
                                <div class="div-left">
                                  <ul class="footer">
                                    <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">1 </button>
                                    </li>
                                    <li class="text-dark"><strong>Add a profile photo</strong>
                                    </li>
                                  </ul>
                                </div>
                                {{-- <div class="div-right">
                                  <ul class="footer">
                                    <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                    </li>

                                   </ul>
                                 </div> --}}
                               </div>
                               <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">Add a profile photo to personalize your portfolio. Use a clear, high-resolution image, center yourself in the frame and
                                ensure good lighting and a professional background.</p>

                            <br/>

                            <div style="float:right">
                                <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                            </div>

                            <div class="footer-container">
                                <div class="div-left">
                                  <ul class="footer">
                                    <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">2 </button>
                                    </li>
                                    <li class="text-dark"><strong>Update your bio information</strong>
                                    </li>
                                  </ul>
                                </div>
                                {{-- <div class="div-right">
                                  <ul class="footer">
                                    <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                    </li>

                                   </ul>
                                 </div> --}}
                               </div>
                               <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                Showcase your personality, education, employment and unique journey through your bio. It’s the perfect way to introduce yourself to clients and employers.
                                </p>

                                <br/>

                                <div style="float:right">
                                    <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Create project</button>
                                </div>

                                <div class="footer-container">
                                    <div class="div-left">
                                      <ul class="footer">
                                        <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">3 </button>
                                        </li>
                                        <li class="text-dark"><strong>Publish your first portfolio project</strong>
                                        </li>
                                      </ul>
                                    </div>
                                    {{-- <div class="div-right">
                                      <ul class="footer">
                                        <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                        </li>

                                       </ul>
                                     </div> --}}
                                   </div>
                                   <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                    Publish your first project and showcase your creativity and skills to the public. Your portfolio is your stage, make it count!
                                    </p>


                                    <br/>

                                <div style="float:right">
                                    <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">View your projects</button>
                                </div>

                                <div class="footer-container">
                                    <div class="div-left">
                                      <ul class="footer">
                                        <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">4 </button>
                                        </li>
                                        <li class="text-dark"><strong>Publish 3 portfolio projects</strong>
                                        </li>
                                      </ul>
                                    </div>
                                    {{-- <div class="div-right">
                                      <ul class="footer">
                                        <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                        </li>

                                       </ul>
                                     </div> --}}
                                   </div>
                                   <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                        Your portfolio grows stronger with variety. Publishing at least three projects demonstrates your versatility, expertise, and creativity to potential clients and employers.
                                    </p>

                                    <br/>

                                <div style="float:right">
                                    <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Share projects</button>
                                </div>

                                <div class="footer-container">
                                    <div class="div-left">
                                      <ul class="footer">
                                        <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">5 </button>
                                        </li>
                                        <li class="text-dark"><strong>Share your first project</strong>
                                        </li>
                                      </ul>
                                    </div>
                                    {{-- <div class="div-right">
                                      <ul class="footer">
                                        <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                        </li>

                                       </ul>
                                     </div> --}}
                                   </div>
                                   <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                    You've published your first project—now let the world see it! Sharing your work increases your visibility and connects you with opportunities.
                                    </p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-body px-0">
                            <!-- Portfolio Indicator-->
                            <div class="d-flex align-items-center justify-content-between px-4">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-5 mr-2" width="48" height="48" src="{{asset('assets/img/team/user_profile.png')}}">
                                    <div class="ms-4">
                                        <div class="small text-dark"><b>Abel Developer</b></div>
                                        <div class="text-xs text-muted">Customer Service Representative</div>
                                     </div>

                                </div>

                            </div>
                        </div>
                        <p class="d-inline-block text-justify" style="margin-right:15px; margin-left:15px">
                            Hi Abel! Our support team is ready to help you navigate the platform and answer
                            any inquiries. Whether you're unsure about a feature, stuck on a task,
                            or need guidance, we've got you covered.</p>

                            <div style="float:right; margin-left:10px">
                                <button type="button" class="btn btn-outline-primary mb-2 text-left rounded-pill">
                                    <i class="fa fa-comment"> Start chat</i>
                                </button>
                            </div>
                    </div>
                    <!-- Illustrations -->


                    <!-- Approach -->
                    <div class="card shadow mb-4">
                        <div class="text-center">
                            <div class="row d-flex justify-content-center">



                            </div>
                        </div>



                  <div class="row px-2 template-demo justify-content-center mb-2 mt-2">
                    <div class="col-sm-3 col-md-4 col-6 circle-progress-block">
                        <div id="circleProgress1" class="progressbar-js-circle">
                            <svg viewBox="0 0 100 100" style="display: block; width: 100%;">
                                <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#eee" stroke-width="3" fill-opacity="0"></path>
                                <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="" stroke-width="3" fill-opacity="0" style="stroke-dasharray: 301.635, 301.635; stroke-dashoffset: 199.079;">
                                </path>
                            </svg>
                        <div class="progressbar-text text-center" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(0, 0, 0); font-size: 1rem;">
                            <strong>0%</strong> <br/>
                            <span class="small" style="font-size: 10px">Total progress</span>
                            </div>
                        </div>
                    </div>
                  </div>


                    </div>

                </div>

                <br/>
                {{-- connecting to community --}}
                <div class="col-xl-7 col-md-6 mb-4">
                    <br/>
                    <div class="card shadow py-2">
                        <div class="card-body">

                            <p class="h5 mb-0 text-gray-800"><strong> Connect with the Clap Academy Community</strong></p>
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2 mb-5">
                                    <div class="row no-gutters align-items-center">

                                        <div class="col indicator_bar_steps">
                                            <div class="progress progress-sm mr-3">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div style="display: flex; justify-content: space-between;">
                                            <p style="margin-right:5em;"><strong>0%</strong></p>
                                        <span class="mr-5" style="margin-right:5em;"> 5 steps left </span>
                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div style="float:right">
                                <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                            </div>

                            <div class="footer-container">
                                <div class="div-left">
                                  <ul class="footer">
                                    <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">1 </button>
                                    </li>
                                    <li class="text-dark"><strong>Follow Clap Academy on LinkedIn</strong>
                                    </li>
                                  </ul>
                                </div>
                                {{-- <div class="div-right">
                                  <ul class="footer">
                                    <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                    </li>

                                   </ul>
                                 </div> --}}
                               </div>
                               <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                Add a profile photo to personalize your portfolio. Use a clear, high-resolution image, center yourself in the frame and
ensure good lighting and a professional background.
                               </p>

                            <br/>

                            <div style="float:right">
                                <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                            </div>

                            <div class="footer-container">
                                <div class="div-left">
                                  <ul class="footer">
                                    <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">2 </button>
                                    </li>
                                    <li class="text-dark"><strong>Drop your first like</strong>
                                    </li>
                                  </ul>
                                </div>
                                {{-- <div class="div-right">
                                  <ul class="footer">
                                    <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                    </li>

                                   </ul>
                                 </div> --}}
                               </div>
                               <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                Showcase your personality, education, employment and unique journey through your bio. It’s the perfect way to introduce yourself to clients and employers.
                                </p>

                                <br/>

                                <div style="float:right">
                                    <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Create project</button>
                                </div>

                                <div class="footer-container">
                                    <div class="div-left">
                                      <ul class="footer">
                                        <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">3 </button>
                                        </li>
                                        <li class="text-dark"><strong>Comment on a project</strong>
                                        </li>
                                      </ul>
                                    </div>
                                    {{-- <div class="div-right">
                                      <ul class="footer">
                                        <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                        </li>

                                       </ul>
                                     </div> --}}
                                   </div>
                                   <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                    Publish your first project and showcase your creativity and skills to the public. Your portfolio is your stage, make it count!
                                    </p>


                                    <br/>

                                <div style="float:right">
                                    <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">View your projects</button>
                                </div>

                                <div class="footer-container">
                                    <div class="div-left">
                                      <ul class="footer">
                                        <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">4 </button>
                                        </li>
                                        <li class="text-dark"><strong>Follow another user</strong>
                                        </li>
                                      </ul>
                                    </div>
                                    {{-- <div class="div-right">
                                      <ul class="footer">
                                        <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                        </li>

                                       </ul>
                                     </div> --}}
                                   </div>
                                   <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                        Your portfolio grows stronger with variety. Publishing at least three projects demonstrates your versatility, expertise, and creativity to potential clients and employers.
                                    </p>

                                    <br/>

                                <div style="float:right">
                                    <button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Share projects</button>
                                </div>

                                <div class="footer-container">
                                    <div class="div-left">
                                      <ul class="footer">
                                        <li><button class="btn btn-primary rounded-circle text-dark" type="button" style="background-color: #fff">5 </button>
                                        </li>
                                        <li class="text-dark"><strong>Share your profile</strong>
                                        </li>
                                      </ul>
                                    </div>
                                    {{-- <div class="div-right">
                                      <ul class="footer">
                                        <li><button type="button" class="btn btn-light rounded-pill" style="background-color: #eee">Edit profile</button>
                                        </li>

                                       </ul>
                                     </div> --}}
                                   </div>
                                   <p class="mb-5 mr-10" style="margin-left: 65px; margin-right:300px justify-content: center">
                                    You've published your first project—now let the world see it! Sharing your work increases your visibility and connects you with opportunities.
                                    </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
        </div>

      </div>
      @include('userDash_template.dash_footer')
  </div>
