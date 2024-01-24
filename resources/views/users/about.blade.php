@extends('layout.master')

@section('title', 'about')

@section('content')

<!-- SUB BANNER -->
<section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>ABOUT lotus</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- ABOUT -->
        <section class="section-about">
            <div class="container">

                <div class="about">
                @for($i = 0; $i < count($reader); $i += 2)
                    <!-- ITEM -->
                    <div class="about-item">

                        <div class="img owl-single">
                            <img src="{{ asset('assets/images/about/' . $reader[$i]->image) }}" alt="">
                            
                        </div>

                        <div class="text">
                            <h2 class="heading">{{$reader[$i]->name}}</h2>
                            <div class="desc">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <b>The point of using Lorem Ipsum is that it has a more-or-less normal</b> distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing<br> packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                            </div>
                        </div>

                    </div>
                    <!-- END / ITEM -->
               
                    @if($i + 1 < count($reader))
                    <!-- ITEM -->
                    <div class="about-item about-right">

                        <div class="img">
                            <img src="{{ asset('assets/images/about/' . $reader[$i + 1]->image) }}" alt="">
                        </div>

                        <div class="text">
                            <h2 class="heading">{{$reader[$i +1]->name}}</h2>
                            <div class="desc">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, <b>sometimes by accident, sometimes on purpose</b> (injected humour and the like).</p>
                            </div>
                        </div>      
                    </div>
                    <!-- END / ITEM -->
                    @endif
                @endfor
                </div>

            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- HOTEL STATISTICS -->
        <section class="section-statistics bg-10">
            
            <div class="awe-overlay"></div>

            <div class="container">
                <div class="statistics">
                
                    <h2 class="heading white text-center">Hotel statistics</h2>
                
                    <div class="statistics_content">
                        <div class="row">
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">768</span>
                                    <span>Guest Stay</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">632</span>
                                    <span>BOOK ROOM</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">1024</span>
                                    <span>MEMBER STAY</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                            <!-- ITEM -->
                            <div class="col-xs-6 col-md-3">
                                <div class="statistics_item">
                                    <span class="count">256</span>
                                    <span>MEALS SERVED</span>
                                </div>
                            </div>
                            <!-- END ITEM -->
                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / HOTEL STATISTICS -->


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
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#b3dbd6dfdfdcf3c7dbd6dfdcc7c6c0dbdcc7d6df9dd0dcde"><span class="__cf_email__" data-cfemail="f59d9099999ab5819d90999a8180869d9a819099db969a98">[email&#160;protected]</span></a></p>
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