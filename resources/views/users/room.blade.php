@extends('layout.master')

@section('title', 'room')

@section('content')

 <!-- SUB BANNER -->
 <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ROOMS &amp; RATES</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->

        <!-- ROOM -->
        <section class="section-room bg-white">
            <div class="container">
                <div class="room-wrap-2">

                @for($i = 0; $i < count($rooms); $i += 2)
                    <!-- ITEM -->
                    <div class="room_item-2">
                  
                        <div class="img">
                            <a href="#"><img src="{{asset('assets/images/room_style/'  . $rooms[$i]->image)}}" alt=""></a>
                        </div>

                        <div class="text">
                            <h2><a href="#">{{$rooms[$i]->type->name}}</a></h2>
                            <span class="price">Start form <span class="amount">$120</span> per day</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <b>more-or-less</b> normal <b>distribution</b> of letters.</p>
                            <a href="{{route('detail.room',  ['id' => $rooms[$i]->id])}}" class="awe-btn awe-btn-13">VIEW DETAILS</a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    @if($i + 1 < count($rooms))
                    <!-- ITEM -->
                    <div class="room_item-2 img-right">

                        <div class="img">
                            <a href="#"><img src="{{asset('assets/images/room_style/'  . $rooms[$i + 1]->image)}}" alt=""></a>
                        </div>

                        <div class="text">
                            <h2><a href="#">{{$rooms[$i + 1]->type->name}}</a></h2>
                            <span class="price">Start form <span class="amount">$120</span> per day</span>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a <b>more-or-less</b> normal <b>distribution</b> of letters.</p>
                            <a href="{{route('detail.room',  ['id' => $rooms[$i + 1]->id])}}" class="awe-btn awe-btn-13">VIEW DETAILS</a>
                        </div>
                    </div>
                    <!-- ITEM -->
                    @endif
                @endfor

            
                </div>
            </div>
  
        </section>
        <!-- END / ROOM -->
        
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
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#0a626f6666654a7e626f66657e7f7962657e6f6624696567"><span class="__cf_email__" data-cfemail="e8808d848487a89c808d84879c9d9b80879c8d84c68b8785">[email&#160;protected]</span></a></p>
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