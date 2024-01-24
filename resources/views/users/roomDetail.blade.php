@extends('layout.master')

@section('title', 'room detail')

@section('content')

 <!-- SUB BANNER -->
 <section class="section-sub-banner bg-16">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                        <h2>{{$detail->type->name}}</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->
        
        <!-- ROOM DETAIL -->
        <section class="section-room-detail bg-white">
            <div class="container">
                
                <!-- DETAIL -->
                <div class="room-detail">
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <!-- LAGER IMAgE -->
                            <div class="room-detail_img">
                                <div class="room_img-item">
                                    <img src="{{asset('assets/images/room_style/'  . $detail->image)}}" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="{{asset('images/room/detail/lager/img-2.jpg')}}" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="{{asset('images/room/detail/lager/img-3.jpg')}}" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="{{asset('images/room/detail/lager/img-6.jpg')}}" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                                <div class="room_img-item">
                                    <img src="{{asset('images/room/detail/lager/img-7.jpg')}}" alt="">    
                                    <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h6>
                                </div>
                              
                            </div>
                            <!-- END / LAGER IMGAE -->
                            
                            <!-- THUMBNAIL IMAGE -->
                            <div class="room-detail_thumbs">
                                <a href="#"><img src="{{asset('images/room/detail/img-2.jpg')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/room/detail/img-3.jpg')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/room/detail/img-4.jpg')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/room/detail/img-7.jpg')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/room/detail/img-8.jpg')}}" alt=""></a>
                                <a href="#"><img src="{{asset('images/room/detail/img-6.jpg')}}" alt=""></a>
                            </div>
                            <!-- END / THUMBNAIL IMAGE -->

                        </div>

                        <div class="col-lg-3">

                            <!-- FORM BOOK -->
                           
                            <!-- END / FORM BOOK -->

                        </div>
                    </div>
                </div>
                <!-- END / DETAIL -->
                
                <!-- TAB -->
                <div class="room-detail_tab">
                    
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="room-detail_tab-header">
                                <li><a href="#overview" data-toggle="tab">OVERVIEW</a></li>
                                <li class="active"><a href="#amenities" data-toggle="tab">amenities</a></li>
                                <li><a href="#rates" data-toggle="tab">RATES</a></li>
                            </ul>
                        </div>
                                        
                        <div class="col-md-9">
                            <div class="room-detail_tab-content tab-content">
                                
                                <!-- OVERVIEW -->
                                <div class="tab-pane fade" id="overview">

                                    <div class="room-detail_overview">
                                        <h5 class='text-uppercase
                                        '>de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h5>
                                        <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service for an elevated experience in the Rocky Mountains.</p>

                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <h6>SPECIAL ROOM</h6>
                                                <ul>
                                                    <li>Max: 4 Person(s)</li>
                                                    <li>Size: 35 m2 / 376 ft2</li>
                                                    <li>View: Ocean</li>
                                                    <li>Bed: King-size or twin beds</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <h6>SERVICE ROOM</h6>
                                                <ul>
                                                    <li>Oversized work desk</li>
                                                    <li>Hairdryer</li>
                                                    <li>Iron/ironing board upon request</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END / OVERVIEW -->

                                <!-- AMENITIES -->
                                <div class="tab-pane fade active in" id="amenities">
                                    
                                    <div class="room-detail_amenities">
                                        <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service for an elevated experience in the Rocky Mountains.</p>
                                        
                                        <div class="row">
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>LIVING ROOM</h6>
                                                <ul>
                                                    <li>Oversized work desk</li>
                                                    <li>Hairdryer</li>
                                                    <li>Iron/ironing board upon request</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>KITCHEN ROOM</h6>
                                                <ul>
                                                    <li>AM/FM clock radio</li>
                                                    <li>Voicemail</li>
                                                    <li>High-speed Internet access</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>balcony</h6>
                                                <ul>
                                                    <li>AM/FM clock radio</li>
                                                    <li>Voicemail</li>
                                                    <li>High-speed Internet access</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>bedroom</h6>
                                                <ul>
                                                    <li>Coffee maker</li>
                                                    <li>25 inch or larger TV</li>
                                                    <li>Cable/satellite TV channels</li>
                                                    <li>AM/FM clock radio</li>
                                                    <li>Voicemail</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>bathroom</h6>
                                                <ul>
                                                    <li>Dataport</li>
                                                    <li>Phone access fees waived</li>
                                                    <li>24-hour Concierge service</li>
                                                    <li>Private concierge</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-lg-4">
                                                <h6>Oversized work desk</h6>
                                                <ul>
                                                    <li>Dataport</li>
                                                    <li>Phone access fees waived</li>
                                                    <li>24-hour Concierge service</li>
                                                    <li>Private concierge</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!-- END / AMENITIES -->

                                <!-- PACKAGE -->
                                
                                <!-- END / PACKAGE -->

                                <!-- RATES -->
                                <div class="tab-pane fade" id="rates">

                                    <div class="room-detail_rates">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Rate Period</th>
                                                    <th>Nightly</th>
                                                    <th>Weekend Night</th>
                                                    <th>Weekly</th>
                                                    <th>Monthly</th>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <h6>Spring/Summer Season</h6>
                                                    <ul>
                                                        <li>Jun 1 - Aug 31</li>
                                                        <li>3 night minimum stay</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$320</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$23</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$120</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$100</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$89</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Summer/Fall Season</h6>
                                                    <ul>
                                                        <li>Jun 1 - Aug 31</li>
                                                        <li>3 night minimum stay</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$320</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$23</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$120</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$100</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amount">$89</span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Christmas Season</h6>
                                                    <ul>
                                                        <li>Jun 1 - Aug 31</li>
                                                        <li>3 night minimum stay</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">$320</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">$23</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">$120</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">$100</span></p>
                                                </td>
                                                <td>
                                                    <p class="price"><span class="amout">$89</span></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <!-- END / RATES -->

                               

                            </div>
                        </div>

                    </div>

                </div>
                <!-- END / TAB -->

                <!-- COMPARE ACCOMMODATION -->
                <div class="room-detail_compare">
                    <h2 class="room-compare_title">COMPARE ACCOMMODATION</h2>

                    <div class="room-compare_content">
                        
                        <div class="row">
                        @foreach($otherRooms as $otherRoom)
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="room-compare_item">
                                    <div class="img">
                                        <a href="#"><img src="{{asset('assets/images/room_style/'  . $otherRoom->image)}}" alt=""></a>
                                    </div>  
                                
                                    <div class="text">
                                        <h2>{{$otherRoom->type->name}}</a></h2>
                                
                                        <ul>
                                            <li><i class="lotus-icon-person"></i> Max: {{$otherRoom->persons}} Person(s)</li>
                                            <li><i class="lotus-icon-bed"></i> Bed: King-size or twin beds</li>
                                            <li><i class="lotus-icon-view"></i> View: Ocean</li>
                                        </ul>
                                
                                        <a href="{{route('detail.room',  ['id' => $otherRoom->id])}}" class="awe-btn awe-btn-default">VIEW DETAIL</a>
                                
                                    </div>
                                
                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endforeach
                            
                        </div>

                    </div>
                </div>
                <!-- END / COMPARE ACCOMMODATION -->

            </div>
        </section>
        <!-- END / SHOP DETAIL -->

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
                                        <a href="#">
                                            <img src="/images/logo-footer.png" alt="">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <p><i class="lotus-icon-location"></i> 225 Beach Street, Australian</p>
                                        <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="https://landing.engotheme.com/cdn-cgi/l/email-protection#e38b868f8f8ca3978b868f8c9796908b8c97868fcd808c8e"><span class="__cf_email__" data-cfemail="5c34393030331c283439303328292f3433283930723f3331">[email&#160;protected]</span></a></p>
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
                                    <img src="/images/tripadvisor.png" alt="">
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