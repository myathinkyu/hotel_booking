@extends('layout.master')

@section('title', 'home')

@section('content')

<div id="page-wrap">
<!-- BANNER SLIDER -->
<section class="section-slider">
            <h1 class="element-invisible">Slider</h1>
            <div id="slider-revolution">
                <ul>
                    <li data-transition="fade">
                        <img src="images/slider/img-5.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-1" data-x="center" data-y="240" data-speed="700" data-start="1500" data-easing="easeOutBack">
                         WELCOME TO
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-sub-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">THE LOTUS HOTEL</div>
                        
                        <a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-12 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">VIEW NOW</a>
                    </li> 

                    <li data-transition="fade">
                        <img src="images/slider/img-4.jpg" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sft fadeout" data-x="center" data-y="195" data-speed="700" data-start="1300" data-easing="easeOutBack">
                          <img src="images/icon-slider-1.png" alt="">
                        </div>
            
                        <div class="tp-caption sft fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                           EACH HOTEL IS
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                            UNIQUE 60%
                        </div>
                        
                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2200">JUST LIKE YOU</div>

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="395" data-easing="easeOutBack" data-speed="700" data-start="2400"><img src="images/icon-slider-2.png" alt=""></div>
                    </li> 

                </ul>
            </div>

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row v-align">
                        <div class="col-lg-3">
                            <h2 class="title-room">ROOMS & RATES</h2>
                        </div>
                        <div class="col-lg-9">
                            <div class="availability-form">
                                <input type="text" class="awe-calendar from" placeholder="Arrival Date">
                                <input type="text" class="awe-calendar to" placeholder="Departure Date">

                                <select class="awe-select">
                                    <option>Adults</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <select class="awe-select">
                                    <option>Children</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="vailability-submit">
                                    <button class="awe-btn awe-btn-13">FIND THE BEST RATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->

        <!-- ACCOMMODATIONS -->
        <section class="section-accommo_1 bg-white">
            <div class="container">

                <div class="accomd-modations_1">

                    <h2 class="heading">ACCOMMODATIONS</h2>

                    <div class="accomd-modations-content_1" >

                        <div class="accomd-modations-slide_1" >

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                            
                                <div class="img">
                                    <a href="#"><img src="images/room/img-7.jpg" alt=""></a>
                                </div>
                            
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- END / ITEM -->
                            
                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#"><img src="images/room/img-8.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            
                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#"><img src="images/room/img-9.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="accomd-modations-room_1">
                                <div class="img">
                                    <a href="#"><img src="images/room/img-7.jpg" alt=""></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">Luxury Room</a></h2>
                                    <p class="desc">Cum sociis natoque penatibus et magnis dis part urient montes, nascetur ridiculus mus. Vestib ulum id ligula porta felis euis.</p>
                                    <div class="wrap-price">
                                        <p class="price">
                                            <span class="amout">$320</span> /days
                                        </p>
                                        <a href="#" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END / ITEM -->
                            
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- ACCOMMODATIONS -->
        
        <!-- SECTION GUESTBOOK - EVENT DEAD -->
        <section class="section-guestbook-event bg-white">
            <div class="container">

                <div class="guestbook-event">
                    <div class="row">

                        <div class="col-md-6">

                            <h2 class="heading">GUEST BOOK</h2>

                            <div class="guestbook-content_1 owl-single">

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                        <span><strong>Seelentag</strong>From Los Angeles, California</span>
                                    </div>
                                
                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful room made our first visit to Catalina Island such a success! We enjoyed the appetizers during "wine time", the turndown service, the fresh flowers in our room and the breakfast delivered to our room in a wicker basket.. An attendant set it out for us in a charming fashion. We would not consider another property when we return to Catalina!</p>
                                    </div> 
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="guestbook-item_1">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                        <span><strong>Seelentag</strong>From Los Angeles, California</span>
                                    </div>
                                
                                    <div class="text">
                                        <p>Both the outstanding staff and the beautiful room made our first visit to Catalina Island such a success! We enjoyed the appetizers during "wine time", the turndown service, the fresh flowers in our room and the breakfast delivered to our room in a wicker basket.. An attendant set it out for us in a charming fashion. We would not consider another property when we return to Catalina!</p>
                                    </div> 
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>

                        <div class="col-md-6">
                            <h2 class="heading">GUEST BOOK</h2>

                            <div class="event-slide owl-single">
                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="images/home/eventdeal/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="event-item">
                                    <div class="img hover-zoom">
                                        <a href="#">
                                            <img src="images/home/eventdeal/img-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / SECTION GUESTBOOK - EVENT DEAD -->

          <!-- ABOUT -->
          <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="images/home/about/img-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <span>Lorem Ipsum is simply dummy text</span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                <a href="#" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">

                <div class="our-best">
                    <div class="row">

                        <div class="col-md-6 col-md-push-6">
                            <div class="img">
                                <img src="images/home/ourbest/img-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Our Best</h2>
                                <p>One of Catalina Island's best-loved hotels, Hotel Vista Del Mar is recognized as one of Avalon's leading hotels with gracious island hospitality, thoughtful amenities and distinctive .</p>
                                <ul>
                                    <li><img src="images/home/ourbest/icon-3.png" alt="icon">250 Best Rooms  5 Star</li>
                                    <li><img src="images/home/ourbest/icon-2.png" alt="icon">Wet Bar with Refrigerator</li>
                                    <li><img src="images/home/ourbest/icon-4.png" alt="icon">Double Whirlpool Jacuzzi Tub</li>
                                    <li><img src="images/home/ourbest/icon-5.png" alt="icon">Luxurious High Thread Count </li>
                                    <li><img src="images/home/ourbest/icon-1.png" alt="icon">Breakfast each morning</li>
                                    <li><img src="images/home/ourbest/icon-6.png" alt="icon">Ocean Views to lotus Hotel</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / OUR BEST -->

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
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#224a474e4e4d62564a474e4d5657514a4d56474e0c414d4f"><span class="__cf_email__" data-cfemail="78101d141417380c101d14170c0d0b10170c1d14561b1715">[email&#160;protected]</span></a></p>
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
                    <p>&copy; 2016 Lotus Hotel All rights reserved.</p>
                </div>
            </div>
            <!-- END / FOOTER BOTTOM -->

        </footer>
        <!-- END / FOOTER -->

    </div>

@endsection