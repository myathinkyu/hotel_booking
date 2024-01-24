@extends('layout.master')

@section('title', 'reservation')

@section('content')

<!-- SUB BANNER -->
<section class="section-sub-banner bg-16">

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
                <li class="active"><a href="#"><span>1.</span> Choose Room</a></li>
                <li><a href="{{url('/reservation')}}"><span>2.</span> Make a Reservation</a></li>
                <li><a href="{{url('/checkout')}}"><span>3.</span> Check Out</a></li>
            </ul>
        </div>
        <!-- END / STEP -->

        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-4 col-lg-3">
                
                <div class="reservation-sidebar">
                    <!-- ROOM SELECT -->
                   
                    <!-- END / ROOM SELECT -->
                
                    <!-- SIDEBAR AVAILBBILITY -->
                    <div class="reservation-sidebar_availability bg-gray">
                    <form action="{{ route('reservation.store') }}" method="post">

                        <!-- HEADING -->
                        <h2 class="reservation-heading">YOUR RESERVATION</h2>
                        <!-- END / HEADING -->

                        <h6 class="check_availability_title">your stay dates</h6>
                            
                        <div class="check_availability-field">
                            <label>Arrive</label>
                            <input type="text" class="awe-calendar awe-input from" placeholder="Arrive" name="arrive">
                        </div>
                        
                        <div class="check_availability-field">
                            <label>Depature</label>
                            <input type="text" class="awe-calendar awe-input to" placeholder="Depature" name="depature">
                        </div>
                        
                        <h6 class="check_availability_title">ROOMS &amp; GUest</h6>
                        
                        <div class="check_availability-field">
                            <label>ROOMS</label>
                            <select class="awe-select" name="room">
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
                                    <select class="awe-select" name="adult">
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
                                    <select class="awe-select" name="child">
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
    
                        <button class="awe-btn awe-btn-13">CHECK AVAILABLE</button>
    
                    </div>
                    <!-- END / SIDEBAR AVAILBBILITY -->
                </form>
                </div>
                

            </div>
            <!-- END / SIDEBAR -->
            
            <!-- CONTENT -->
            <div class="col-md-8 col-lg-9">

                <div class="reservation_content">
                    
                    <!-- RESERVATION ROOM -->
                    <div class="reservation-room">
                    @foreach($rooms as $room)
                        <!-- ITEM -->
                        <div class="reservation-room_item">

                            <h2 class="reservation-room_name"><a href="#">{{$room->type->name}}</a></h2>

                            <div class="reservation-room_img">
                                <a href="#"><img src="{{asset('assets/images/room_style/'  . $room->image)}}" alt=""></a>
                            </div>

                            <div class="reservation-room_text">

                                <div class="reservation-room_desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                    <ul>
                                        <li>1 King Bed</li>
                                        <li>Free Wi-Fi in all guest rooms</li>
                                        <li>Separate sitting area</li>
                                         
                                    </ul>
                                </div>

                                <a href="#" class="reservation-room_view-more">View More Information</a>

                                <div class="clear"></div>

                                <p class="reservation-room_price">
                                    <span class="reservation-room_amout">${{$room->price}}</span> / days
                                    <a href="#" class="awe-btn awe-btn-default">BOOK ROOM</a>
                                </p>

                                

                            </div>

                            <div class="reservation-room_package">
                                <div class="reservation-room_package-content collapse" id="reservation-room_package-1">

                                    <!-- ITEM PACKAGE -->
                                    <div class="reservation-package_item">

                                        <div class="reservation-package_img">
                                            <a href="#"><img src="images/reservation/package/img-1.jpg" alt=""></a>
                                        </div>

                                        <div class="reservation-package_text">

                                            <h4><a href="#">package standard</a></h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                            <div class="reservation-package_book-price">
                                                <p class="reservation-package_price">
                                                    <span class="amount">${{$room->price}}</span>
                                                </p>
                                                <a href="#" class="awe-btn awe-btn-default">Book package</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- END / ITEM PACKAGE -->

                                    <!-- ITEM PACKAGE -->
                                    <div class="reservation-package_item">

                                        <div class="reservation-package_img">
                                            <a href="#"><img src="images/reservation/package/img-1.jpg" alt=""></a>
                                        </div>

                                        <div class="reservation-package_text">

                                            <h4><a href="#">package standard</a></h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                            <div class="reservation-package_book-price">
                                                <p class="reservation-package_price">
                                                    <span class="amout">$260</span>
                                                </p>
                                                <a href="#" class="awe-btn awe-btn-default">Book package</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- END / ITEM PACKAGE -->

                                    <!-- ITEM PACKAGE -->
                                    <div class="reservation-package_item">

                                        <div class="reservation-package_img">
                                            <a href="#"><img src="images/reservation/package/img-1.jpg" alt=""></a>
                                        </div>

                                        <div class="reservation-package_text">

                                            <h4><a href="#">package standard</a></h4>
                                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                                            <div class="reservation-package_book-price">
                                                <p class="reservation-package_price">
                                                    <span class="amout">$260</span>
                                                </p>
                                                <a href="#" class="awe-btn awe-btn-default">Book package</a>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- END / ITEM PACKAGE -->

                                </div>

                            </div>

                        </div>
                        <!-- END / ITEM -->
                    @endforeach
                    </div>
                    <!-- END / RESERVATION ROOM -->

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
                        <a href="#"><i class="fa fa-pinterest"></i></a>
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
                            <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#abc3cec7c7c4ebdfc3cec7c4dfded8c3c4dfcec785c8c4c6"><span class="__cf_email__" data-cfemail="1078757c7c7f506478757c7f646563787f64757c3e737f7d">[email&#160;protected]</span></a></p>
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
                        <li><a href="#">Comming Soon</a></li>
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