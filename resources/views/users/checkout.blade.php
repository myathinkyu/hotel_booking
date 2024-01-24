@extends('layout.master')

@section('title', 'checkout')

@section('content')

  <!-- SUB BANNER -->
  <section class="section-sub-banner bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>CheckOut</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / SUB BANNER -->
        
        <!-- BLOG -->
        <section class="section-checkout">
            <div class="container">
                <div class="checkout">

                    <p class="checkout_login">Returning customer? <a href="{{url('/login')}}">Click here to login</a></p>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="checkout_head">
                                <h3>BILLING DETAILS</h3>
                                <span>Lorem Ipsum is simply dummy text</span>
                            </div>

                            <div class="checkout_form">

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Country*</label>
                                        <select class="awe-select">
                                            <option>United Kingdom (Uk)</option>
                                            <option>VietNam</option>
                                            <option>ThaiLan</option>
                                            <option>China</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>First Name*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Last Name*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Company Name</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Address*</label>
                                        <input type="text" class="field-text" placeholder="Street Address">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <input type="text" class="field-text" placeholder="Apartment, suite, unit etc. (Optional)">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Town / City*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Country*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Email Address*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <label>Phone*</label>
                                        <input type="text" class="field-text">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Order Notes</label>
                                        <textarea class="field-textarea" placeholder="Notes about your order, eg. special notes for delivery"></textarea>
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>
                                            <input type="radio" class="field-radio"> Create an account?
                                        </label>

                                        <p class="checkout_text">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>Account Password*</label>
                                        <input type="password" class="field-text">
                                    </div>

                                    <div class="col-xs-12 col-sm-12">
                                        <label>&nbsp;</label>
                                        <p class="code-enter">
                                            You have a coupon? <a href="#">Click here to enter your code</a>
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div> 

                        <div class="col-md-6">

                            <div class="checkout_head checkout_margin">
                                <h3>Your payment details</h3>
                            </div>

                            <div class="checkout_form checkout_margin">
                            
                                <div class="checkout_cart">

                                    <!-- ITEM -->
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="images/cart/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">Luxury Room</a>
                                            <p><span>2 days  - 3 rooms</span> <b>$960</b></p>
                                        </div>
                                        <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="images/cart/img-3.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">Standard Room</a>
                                            <p><span>2 days  - 3 rooms</span> <b>$960</b></p>
                                        </div>
                                        <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                    <!-- END / ITEM -->

                                    <!-- ITEM -->
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="images/cart/img-2.jpg" alt=""></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">Couple Room</a>
                                            <p><span>2 days  - 3 rooms</span> <b>$960</b></p>
                                        </div>
                                        <a href="#" class="remove"><i class="fa fa-close"></i></a>
                                    </div>
                                    <!-- END / ITEM -->

                                </div>

                                <div class="checkout_cartinfo">
                                    <p><span>Cart Subtotal:</span> $1080</p>
                                    <p><span>Shipping:</span> Free Shipping</p>
                                    <p><span>Order Total:</span> <span class="color-red">$1080</span></p>
                                </div> 
                                
                                <div class="checkout_option">
                                    <ul>
                                        <li>
                                            <input type="radio" class="radio payment-methor" name="payment">
                                            <h6>Direct Bank Transfer</h6>
                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                        </li>
                                        <li>
                                            <input type="radio" class="radio payment-methor" name="payment"> 
                                            <h6>Credit Card</h6>
                                            <img src="images/icon-card.jpg" alt="">
                                        </li>
                                    </ul>
                                </div>

                                <div class="checkout_btn">
                                    <button class="awe-btn awe-btn-13 btn-order">PLACE ORDER</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / BLOG -->

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
                            <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#751d1019191a35011d10191a0100061d1a0110195b161a18"><span class="__cf_email__" data-cfemail="f8909d949497b88c909d94978c8d8b90978c9d94d69b9795">[email&#160;protected]</span></a></p>
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