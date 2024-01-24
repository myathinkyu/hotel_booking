
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from mannatthemes.com/dastone/default/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 05:36:54 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dastone - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{asset('assets/images/logo.png')}}" alt="logo-large" class="logo-lg logo-light">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
            @include('admin.sidebar')
    
                <div class="update-msg text-center">
                    <a href="javascript: void(0);" class="float-end close-btn text-muted" data-dismiss="update-msg" aria-label="Close" aria-hidden="true">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h5 class="mt-3">Mannat Themes</h5>
                    <p class="mb-3">We Design and Develop Clean and High Quality Web Applications</p>
                    <a href="javascript: void(0);" class="btn btn-outline-warning btn-sm">Upgrade your plan</a>
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">  
                        <li class="dropdown hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="search" class="topbar-icon"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                                <!-- Top Search Bar -->
                                <div class="app-search-topbar">
                                    <form action="#" method="get">
                                        <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>                      

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i data-feather="bell" class="align-self-center topbar-icon"></i>
                                <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">
                            
                                <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                    Notifications <span class="badge bg-primary rounded-pill">2</span>
                                </h6> 
                                <div class="notification-menu" data-simplebar>
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">2 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">10 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">40 min ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">                                                    
                                                <i data-feather="users" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">1 hr ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle">
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                                <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                    <!-- item-->
                                    <a href="#" class="dropdown-item py-3">
                                        <small class="float-end text-muted ps-2">2 hrs ago</small>
                                        <div class="media">
                                            <div class="avatar-md bg-soft-primary">
                                                <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                            </div>
                                            <div class="media-body align-self-center ms-2 text-truncate">
                                                <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                                <small class="text-muted mb-0">Dummy text of the printing.</small>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a><!--end-item-->
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">Nick</span>
                                <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="profile-user" class="rounded-circle thumb-xs" />                                 
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                                <a class="dropdown-item" href="apps-contact-list.html"><i data-feather="users" class="align-self-center icon-xs icon-dual me-1"></i> Contacts</a>
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="{{ route('admin.home' )}}"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" href="#" role="button"><i class="fas fa-plus me-2"></i>New Task</a>
                            </div>                                
                        </li>                           
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">Form Elements</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastone</a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                            <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                            <span class="" id="Select_date">Jan 11</span>
                                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary">
                                            <i data-feather="download" class="align-self-center icon-xs"></i>
                                        </a>
                                    </div><!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add New User form</h4>
                                    <p class="text-muted mb-0">Be sure to use <code class="highlighter-rouge">.form-label-sm</code> 
                                        or <code class="highlighter-rouge">.form-label-lg</code> to your <code class="highlighter-rouge">&lt;label&gt;</code>s 
                                        or <code class="highlighter-rouge">&lt;legend&gt;</code>s 
                                        to correctly follow the size of <code class="highlighter-rouge">.form-control-lg</code> and 
                                        <code class="highlighter-rouge">.form-control-sm</code>.
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">                                    
                                    <div class="general-label">
                                        <form action="{{ route('admin.submit') }}" method="post">
                                            @csrf
                                                
                                            <div class="mb-3 row">
                                                <label for="horizontalInput2" class="col-sm-2 form-label align-self-center mb-lg-0">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="horizontalInput2" name="name"  value="{{old('name')}}">

                                                    @error('name')
                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="horizontalInput3" class="col-sm-2 form-label align-self-center mb-lg-0">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="horizontalInput1" name="email" value="{{old('email')}}">

                                                    @error('email')
                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="horizontalInput3" class="col-sm-2 form-label align-self-center mb-lg-0">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="horizontalInput1" name="password">

                                                    @error('password')
                                                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>

    
                                            <div class="mb-3 row">
                                                <div class="col-sm-10 ms-auto">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="horizontalCheckbox">
                                                        <label class="form-check-label" for="horizontalCheckbox">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-sm-10 ms-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div> 
                                        </form>           
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!-- container -->

                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Dastone <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/js/moment.js')}}"></script>
        <script src="{{asset('../plugins/daterangepicker/daterangepicker.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        
    </body>


<!-- Mirrored from mannatthemes.com/dastone/default/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 05:36:54 GMT -->
</html>