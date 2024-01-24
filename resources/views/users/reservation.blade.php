@extends('layout.master')

@section('title', 'reservation')

@section('content')

  <!-- SUB BANNER -->
  <section class="section-sub-banner awe-parallax bg-16">

<div class="awe-overlay"></div>

<div class="sub-banner">
    <div class="container">
        <div class="text text-center">
            <h2>RESERVATION</h2>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
        </div>
    </div>

</div>

</section>
<!-- END / SUB BANNER -->

<!-- RESERVATION -->
<section class="section-reservation-page bg-white">

<div class="container">
    <div class="reservation-page">
        
        <!-- STEP -->
        <div class="reservation_step">
            <ul>
                <li><a href="{{url('/reservationRoom')}}"><span>1.</span> Choose Room</a></li>
                <li class="active"><a href="#"><span>2.</span> Make a Reservation</a></li>
                <li><a href="{{url('/checkout')}}"><span>3.</span> Check Out</a></li>
            </ul>
        </div>
        <!-- END / STEP -->

        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-4 col-lg-3">

                <div class="reservation-sidebar">

                    <!-- ROOM SELECT -->
                    <div class="reservation-room-selected bg-gray">

                        <!-- HEADING -->
                        <h2 class="reservation-heading">Select Rooms</h2>
                        <!-- END / HEADING -->

                        <!-- ITEM -->
                        <div class="reservation-room-seleted_item">
                            <h6>ROOM 1</h6> <span class="apb-option">2 Adult, 1 Child</span>
                            <div class="reservation-room-seleted_name">
                                <h2><a href="#">LUXURY ROOM</a></h2>
                                <span class="reservation-amout">$470.00</span>
                            </div>
                            <a href="#" class="reservation-room-seleted_change">Change Room</a>
                        </div>
                        <!-- END / ITEM -->

                        <!-- CURRENT -->
                        <div class="reservation-room-seleted_current bg-blue">
                            <h6>YOU ARE BOOKING ROOM 2</h6>  
                            <span>2 Adult, 1 Child</span>   
                        </div>
                        <!-- CURRENT -->
                        
                        <!-- TOTAL -->
                        <div class="reservation-room-seleted_total">
                            <label>TOTAL</label>
                            <span class="reservation-total">$470.00</span>
                        </div>
                        <!-- END / TOTAL -->

                    </div>

                    <!-- END / ROOM SELECT -->

                    <!-- SIDEBAR AVAILBBILITY -->
                    <div class="reservation-sidebar_availability bg-gray">

                        <!-- HEADING -->
                        <h2 class="reservation-heading">YOUR RESERVATION</h2>
                        <!-- END / HEADING -->

                        <h6 class="check_availability_title">your stay dates</h6>
                            
                        <div class="check_availability-field">
                            <label>Arrive</label>
                            <input type="text" class="awe-calendar awe-input from" placeholder="Arrive">
                        </div>
                        
                        <div class="check_availability-field">
                            <label>Depature</label>
                            <input type="text" class="awe-calendar awe-input to" placeholder="Depature">
                        </div>
                        
                        <h6 class="check_availability_title">ROOMS &amp; GUest</h6>
                        
                        <div class="check_availability-field">
                            <label>ROOMS</label>
                            <select class="awe-select">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                            </select>
                        </div>
                        
                        <div class="check_availability_group">
                        
                            <span class="label-group">ROOM 1</span>
                        
                            <div class="check_availability-field_group">
                        
                                <div class="check_availability-field">
                                    <label>Adult</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                        
                                <div class="check_availability-field">
                                    <label>Child</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                        
                            </div>
                        
                        </div>

                        <div class="check_availability_group">
                        
                            <span class="label-group">ROOM 2</span>
                        
                            <div class="check_availability-field_group">
                        
                                <div class="check_availability-field">
                                    <label>Adult</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                        
                                <div class="check_availability-field">
                                    <label>Chirld</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                        
                            </div>
                        
                        </div>

                        <button class="awe-btn awe-btn-13">CHECK AVAILABLE</button>

                    </div>
                    <!-- END / SIDEBAR AVAILBBILITY -->

                </div>

            </div>
            <!-- END / SIDEBAR -->
            
            <!-- CONTENT -->
            <div class="col-md-8 col-lg-9">

                <div class="reservation_content">
                    
                    <div class="reservation-chosen-message bg-gray text-center">
                        <h4>All Rooms are Selected</h4>
                        <p>You have chosen all of your rooms would<br> you like to continue?</p>
                        <a href="#" class="awe-btn awe-btn-6">GO NEXT STEP</a>
                    </div>

                </div>

            </div>
            <!-- END / CONTENT -->
            
        </div>
    </div>
</div>

</section>
<!-- END / RESERVATION -->

<!-- FOOTER -->
<footer id="footer">

<!-- FOOTER TOP -->
<div class="footer_top">
    <div class="container">
        <div class="row">

            <!-- WIDGET MAILCHIMP -->
            <div class="col-lg-9">
                <div class="mailchimp">
                    <h4>News &amp; Offers</h4>
                    <div class="mailchimp-form">
                        <form action="#" method="POST">
                            <input type="text" name="email" placeholder="Your email address" class="input-text">
                            <button class="awe-btn">SIGN UP</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END / WIDGET MAILCHIMP -->
            
            <!-- WIDGET SOCIAL -->
            <div class="col-lg-3">
                <div class="social">
                    <div class="social-content">
                        <a href="#"><i class="fa fa-pintrest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- END / WIDGET SOCIAL -->

        </div>
    </div>
</div>
<!-- END / FOOTER TOP -->

<!-- FOOTER CENTER -->
<div class="footer_center">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-lg-5">
                <div class="widget widget_logo">
                    <div class="widget-logo">
                        <div class="img">
                            <a href="#"><img src="images/logo-footer.png" alt=""></a>
                        </div>
                        <div class="text">
                            <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                            <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#f29e9d8687819a9d86979eb2959f939b9edc919d9f"><span class="__cf_email__" data-cfemail="e28e8d9697918a8d96878ea2858f838b8ecc818d8f">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title">Page site</h4>
                    <ul>
                        <li><a href="#">Guest Book</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Event</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-4 col-lg-2">
                <div class="widget">
                    <h4 class="widget-title">ABOUT</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Coming Soon</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-4 col-lg-3">
                <div class="widget widget_tripadvisor">
                    <h4 class="widget-title">Tripadvisor</h4>
                    <div class="tripadvisor">
                        <p>Now with hotel reviews by</p>
                        <img src="images/tripadvisor.png" alt="">
                        <span class="tripadvisor-circle">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i class="part"></i>
                        </span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- END / FOOTER CENTER -->

<!-- FOOTER BOTTOM -->
<div class="footer_bottom">
    <div class="container">
        <p>&copy; 2015 Lotus Hotel All rights reserved.</p>
    </div>
</div>
<!-- END / FOOTER BOTTOM -->

</footer>
<!-- END / FOOTER -->

@endsection