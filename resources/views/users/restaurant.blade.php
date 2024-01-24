@extends('layout.master')

@section('title', 'restaurant')

@section('content')

  <!-- SUB BANNER -->
  <section class="section-sub-banner bg-3">
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Restaurant</h2>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

 <!-- RESTAURANTS -->
 <section class="section-restaurant-2 bg-white">
            <div class="container">

                <div class="restaurant-small">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="restaurant_content">

                                <!-- HEADING -->
                                <div class="restaurant_title">
                                    <h2 class="heading">BREAKFAST</h2>
                                    <span class="time">11h00 Am - 2h00 Pm</span>
                                </div>
                                <!-- END / HEADING -->
                                
                            @foreach($items as $item)
                                @if($item->category === 'breakfast')
                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="{{ asset('assets/images/restaurants/' . $item->image) }}" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">{{$item->name}}</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$80</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->
                                @endif
                            @endforeach

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-2.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">meat soup</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$120</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-3.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">SPAGESTI</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$15</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-4.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">Wildberry</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$20</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-5.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">Wildberry</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$15</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="restaurant_content">

                                <!-- HEADING -->
                                <div class="restaurant_title">
                                    <h2 class="heading">LUNCH</h2>
                                    <span class="time">11h00 Am - 2h00 Pm</span>
                                </div>
                                <!-- END / HEADING -->
                            @foreach($items as $item)
                                @if($item->category === 'lunch')
                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="{{ asset('assets/images/restaurants/' . $item->image) }}" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">{{$item->name}}</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$90</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->
                                @endif
                            @endforeach

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-8.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">Pork Skewers Rotation</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$60</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-9.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">EGGS</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$30</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-10.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">Grilled Chicken</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$31</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-11.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">FISH</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$32</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="restaurant_content">

                                <!-- HEADING -->
                                <div class="restaurant_title">
                                    <h2 class="heading">DINNER</h2>
                                    <span class="time">11h00 Am - 2h00 Pm</span>
                                </div>
                                <!-- END / HEADING -->

                            @foreach($items as $item)
                                @if($item->category === 'dinner')
                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="{{ asset('assets/images/restaurants/' . $item->image) }}" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">{{$item->name}}</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$80</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                @endif
                            @endforeach

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-14.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">meat soup</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$120</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-15.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">MEAT PIG</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$15</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-16.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">meat soup</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$20</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-17.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">EGG</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$20</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="restaurant_content">

                                <!-- HEADING -->
                                <div class="restaurant_title">
                                    <h2 class="heading">DRINK</h2>
                                    <span class="time">11h00 Am - 2h00 Pm</span>
                                </div>
                                <!-- END / HEADING -->

                            @foreach($items as $item)
                                @if($item->category === 'drink')
                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="{{ asset('assets/images/restaurants/' . $item->image) }}" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">{{$item->name}}</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$90</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->
                                @endif
                            @endforeach

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-20.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">Wine Red</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$50</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-21.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">blueberries water</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$30</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-22.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">lemon mint</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$80</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                                <!-- ITEM -->
                                <div class="restaurant_item small-thumbs">
                                
                                    <div class="img">
                                        <a href="#"><img src="images/restaurants/img-23.jpg" alt=""></a>
                                    </div>
                                
                                    <div class="text">
                                        <h2><a href="#">Ballantiner Wine</a></h2>
                                
                                        <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                
                                        <p class="price">
                                            <span class="amout">$80</span>
                                        </p>
                                    </div>
                                
                                </div>
                                <!-- END / ITEM -->

                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- END / RESTAURANTS -->

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
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#bcd4d9d0d0d3fcc8d4d9d0d3c8c9cfd4d3c8d9d092dfd3d1"><span class="__cf_email__" data-cfemail="fb939e979794bb8f939e97948f8e8893948f9e97d5989496">[email&#160;protected]</span></a></p>
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