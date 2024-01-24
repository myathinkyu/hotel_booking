<!-- PRELOADER -->
<div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">
            
            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-cloud"></i> 18 °C</span>
                        <span><i class="lotus-icon-location"></i> 225 Beach Street, Australian</span>
                        <span><i class="lotus-icon-phone"></i> 1-548-854-8898</span>
                    </div>
                    <div class="header_right float-right">

                        <span class="login-register">
                            @if(Auth::check())
                            <a href="{{url('/logout')}}">Logout</a>
                            @else
                            <a href="{{url('/login')}}">Login</a>
                            <a href="{{url('/register')}}">register</a>
                            @endif
                        </span>

                        <div class="dropdown currency">
                            <span>USD <i class="fa fa"></i></span>
                            <ul>
                                <li class="active"><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </div>

                        <div class="dropdown language">
                            <span>ENG</span>

                            <ul>
                                <li class="active"><a href="#">ENG</a></li>
                                <li><a href="#">FR</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->
            
            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="#"><img src="{{asset('images/logo-header.png')}}" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->
                    
                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="current-menu-item">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            
                            <li>
                                <a href="{{url('/room')}}">Room</a>
                            </li>
                            <li>
                                <a href="{{url('/restaurant')}}">Restaurant</a>
                            </li>
                            <li>
                                <a href="#">Reservation <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/reservationRoom')}}">Choose Room</a></li>
                                    <li><a href="{{url('/reservation')}}">Make a Reservation</a></li>
                                    <li><a href="{{url('/checkout')}}">Check Out</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Page <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{url('/feedback')}}">Guest Book</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">Event <span class="fa fa-caret-right"></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Events</a></li>
                                            <li><a href="events-fullwidth.html">Events Fullwidth</a></li>
                                            <li><a href="events-detail.html">Events Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#">Blog <span class="fa fa-caret-down"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/blog')}}">Blog</a></li>
                                    <li><a href="{{url('/blog_detail')}}">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->