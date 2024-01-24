@extends('layout.master')

@section('title', 'blog')

@section('content')

  <!-- SUB BANNER -->
  <section class="section-sub-banner bg-9">
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>Our BLOG</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- BLOG -->
        <section class="section-blog bg-white">
            <div class="container">
                <div class="blog">
                    <div class="row">
                        <h1 class="element-invisible">Blog</h1>
                        <div class="col-md-8 col-md-push-4">
                            <div class="blog-content">

                                <!-- SEARCH BLOG -->
                                <div class="widget widget_search">

                                    <div class="widgetsearch">
                                        <form  action="#">
                                            <input type="search" class="input-text" placeholder="Search your entry here ..." value="" name="s">
                                            <input type="submit" class="input-submit" value="Search">
                                        </form>
                                    </div>
                                </div>
                                <!-- END / SEARCH BLOG -->

                                <!-- POST ITEM -->
                                <article class="post">

                                    <div class="entry-media">
                                        <a href="#" class="post-thumbnail hover-zoom"><img src="images/blog/img-2.jpg" alt=""></a>

                                        <span class="posted-on"><strong>23</strong>JUN</span>

                                    </div>
                                    
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="#">relaxing &amp; travel in our hotel</a></h2>
                                    </div>

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><br>
                                        <p>But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>

                                    <div class="entry-footer">
                                        <p class="entry-meta">

                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time">JUN 23, 2014</span>
                                            </span>
                
                                            <span class="entry-author">
                                                <span class="screen-reader-text">Posted by </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name">Jonatha Owens</span>
                                                </a>
                                            </span>

                                            <span class="entry-categories">
                                                <a href="#">Food Dinner</a>, 
                                                <a href="#">Travel</a>
                                            </span>

                                            <span class="entry-comments-link">
                                                <a href="#">3 Comments</a>
                                            </span>

                                            <span class="entry-tags">
                                                <span class="screen-reader-text"><i class="fa fa-tags"></i></span>
                                                <a href="#">Food</a> -
                                                <a href="#">Drink</a> -
                                                <a href="#">Event</a>
                                            </span>
                                        </p>
                                    </div>

                                </article>
                                <!-- END / POST ITEM -->

                                <!-- POST ITEM -->
                                <article class="post">

                                    <div class="entry-media">

                                        <div class="post-slider owl-single">
                                            <img src="images/blog/img-3.jpg" alt="">
                                            <img src="images/blog/img-3.jpg" alt="">
                                        </div>

                                        <span class="posted-on"><strong>23</strong>JUN</span>

                                    </div>
                                    
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="#">new kind of chicken food for dinner</a></h2>
                                    </div>

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><br>
                                        <p>But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>

                                    <div class="entry-footer">
                                        <p class="entry-meta">

                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time">JUN 23, 2014</span>
                                            </span>
                
                                            <span class="entry-author">
                                                <span class="screen-reader-text">Posted by </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name">Jonatha Owens</span>
                                                </a>
                                            </span>

                                            <span class="entry-categories">
                                                <a href="#">Food Dinner</a>, 
                                                <a href="#">Travel</a>
                                            </span>

                                            <span class="entry-comments-link">
                                                <a href="#">3 Comments</a>
                                            </span>
                                        </p>
                                    </div>

                                </article>
                                <!-- END / POST ITEM -->

                                <!-- POST ITEM -->
                                <article class="post">

                                    <div class="entry-media">
                                        <a href="#" class="post-thumbnail hover-zoom"><img src="images/blog/img-4.jpg" alt=""></a>

                                        <span class="posted-on"><strong>23</strong>JUN</span>

                                    </div>
                                    
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="#">one night wedding with jessica &amp; robet</a></h2>
                                    </div>

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><br>
                                        <p>But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>

                                    <div class="entry-footer">
                                        <p class="entry-meta">

                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time">JUN 23, 2014</span>
                                            </span>
                
                                            <span class="entry-author">
                                                <span class="screen-reader-text">Posted by </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name">Jonatha Owens</span>
                                                </a>
                                            </span>

                                            <span class="entry-categories">
                                                <a href="#">Food Dinner</a>, 
                                                <a href="#">Travel</a>
                                            </span>

                                            <span class="entry-comments-link">
                                                <a href="#">3 Comments</a>
                                            </span>
                                        </p>
                                    </div>

                                </article>
                                <!-- END / POST ITEM -->

                                <!-- POST ITEM -->
                                <article class="post">

                                    <div class="entry-media has-format">

                                        <a href="#" class="post-thumbnail"><img src="images/blog/img-5.jpg" alt=""></a>

                                        <span class="post-format"></span>

                                        <span class="posted-on"><strong>23</strong>JUN</span>

                                    </div>
                                    
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="#">fishing with lotus hotel</a></h2>
                                    </div>

                                    <div class="entry-content">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><br>
                                        <p>But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>

                                    <div class="entry-footer">
                                        <p class="entry-meta">

                                            <span class="posted-on">
                                                <span class="screen-reader-text">Posted on</span>
                                                <span class="entry-time">JUN 23, 2014</span>
                                            </span>
                
                                            <span class="entry-author">
                                                <span class="screen-reader-text">Posted by </span>
                                                <a href="#" class="entry-author-link">
                                                    <span class="entry-author-name">Jonatha Owens</span>
                                                </a>
                                            </span>

                                            <span class="entry-categories">
                                                <a href="#">Food Dinner</a>, 
                                                <a href="#">Travel</a>
                                            </span>

                                            <span class="entry-comments-link">
                                                <a href="#">3 Comments</a>
                                            </span>
                                        </p>
                                    </div>

                                </article>
                                <!-- END / POST ITEM -->

                                <!-- PAGE NAVIGATION   -->
                                <ul class="page-navigation">
                                    <li class="first"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="current-page"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li class="last"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                                <!-- END / PAGE NAVIGATION   -->


                            </div>
                        </div> 

                        <div class="col-md-4 col-md-pull-8">
                            <div class="sidebar">

                                <!-- WIDGET DEAL -->
                                <div class="widget widget_deal">
                                    <h4 class="widget-title">DEAL</h4>
                                    <div class="widget-deal owl-single">

                                        <!-- ITEM -->
                                        <div class="item">
                                            <div class="img">
                                                <img src="images/hotel/img-1.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <h2>Luxury ROOM FORM</h2>
                                                <p class="price">$320</p>
                                                <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="item">
                                            <div class="img">
                                                <img src="images/hotel/img-1.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <h2>Family ROOM FORM</h2>
                                                <p class="price">$320</p>
                                                <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                        <!-- ITEM -->
                                        <div class="item">
                                            <div class="img">
                                                <img src="images/hotel/img-1.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <h2>Standard ROOM FORM</h2>
                                                <p class="price">$320</p>
                                                <a href="#" class="awe-btn awe-btn-12">VIEW MORE</a>
                                            </div>
                                        </div>
                                        <!-- END / ITEM -->

                                    </div>
                                </div>
                                <!-- END / WIDGET DEAL -->
                                
                                <!-- WIDGET CATEGORIES -->
                                <div class="widget widget_categories">
                                    <h4 class="widget-title">CATEGORIES</h4>
                                    <ul>
                                        <li><a href="#">Food &amp; Drinks (4)</a></li>
                                        <li><a href="#">Gardening (2)</a></li>
                                        <li><a href="#">Personal (6)</a></li>
                                        <li><a href="#">Recipes (2)</a></li>
                                        <li><a href="#">Uncategorized</a></li>
                                    </ul>
                                </div>
                                <!-- END / WIDGET CATEGORIES -->

                                <!-- UPCOMING EVENTS -->
                                <div class="widget widget_upcoming_events">
                                    <h4 class="widget-title">Upcoming Events</h4>
                                    <ul>
                                        <li>
                                            <span class="event-date">
                                                <strong>23</strong>
                                                JUN
                                            </span>
                                            <div class="text">
                                                <a href="#">DISCOUNT EVENT ROOM</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="event-date">
                                                <strong>18</strong>
                                                JUN
                                            </span>
                                            <div class="text">
                                                <a href="#">Event wedding 1</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="event-date">
                                                <strong>7</strong>
                                                JUN
                                            </span>
                                            <div class="text">
                                                <a href="#">EVENT WEDDING 2</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END / UPCOMING EVENTS -->

                                <!-- WIDGET RECENT POST HAS THUMBNAIL -->
                                <div class="widget widget_recent_entries has_thumbnail">        
                                    <h4 class="widget-title">Recent Posts</h4>
                                    <ul>
                                        <li>
                                            <div class="img">
                                                <a href="#"><img src="images/blog/thumbnail/img-2.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <a href="#">Relaxing &amp; travel in our hotel</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img">
                                                <a href="#"><img src="images/blog/thumbnail/img-3.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <a href="#">New kind of chicken food for dinner</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img">
                                                <a href="#"><img src="images/blog/thumbnail/img-4.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <a href="#">One night wedding with jessia &amp; robet</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img">
                                                <a href="#"><img src="images/blog/thumbnail/img-5.jpg" alt=""></a>
                                            </div>
                                            <div class="text">
                                                <a href="#">Fishing with lotus hotel</a>
                                                <span class="date">at 12:30 Pm, Thu 01 Oct 2015</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END / WIDGET RECENT POST HAS THUMBNAIL -->

                                <!-- TAG -->
                                <div class="widget widget_tag_cloud">
                                    <h4 class="widget-title">Tags</h4>
                                    <div class="tagcloud">
                                        <a href="#">Restaurant</a>
                                        <a href="#">Food Dinner</a>
                                        <a href="#">Travel</a>
                                        <a href="#">Blog</a>
                                        <a href="#">Wedding</a>
                                        <a href="#">Luxury Room</a>
                                        <a href="#">Valentine</a>
                                        <a href="#">Valentine</a>
                                    </div>
                                </div>
                                <!-- END / TAG -->
                                
                                <!-- WIDGET SOCIAL -->
                                <div class="widget widget_social">
                                    <h4 class="widget-title">lotus SOCIALS</h4>
                                    <div class="widget-social">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- END / WIDGET SOCIAL -->

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
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#ddb5b8b1b1b29da9b5b8b1b2a9a8aeb5b2a9b8b1f3beb2b0"><span class="__cf_email__" data-cfemail="563e333a3a3916223e333a392223253e3922333a7835393b">[email&#160;protected]</span></a></p>
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