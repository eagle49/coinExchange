@extends('layouts/default')

{{-- Page title --}}
@section('title')
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!--end of page level css-->
@stop

{{-- content --}}
@section('content')
    <!-- maincontent Starts -->
    <div class="main_content">
        <div class="how_it_work">
        	<div class="container">
            	<div class="how_it_work_in">
            	<h3>How It Works</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius?<br> m od tempor incididunt ut labore et.</p>
                <ul class="clearfix">
                	<li class="arrow">
                    	<h2>1</h2>
                        <div class="work_cont">
                        	<figure><img src="{{ asset('assets/images/icon7.png') }}" alt="icon" width="97" height="85"></figure>
                            <h6>Lorem Ipsum Dolor Sit</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius m od tempor.</p>
                        </div>
                    </li>
                    <li class="arrow">
                    	<h2>2</h2>
                        <div class="work_cont">
                        	<figure><img src="{{ asset('assets/images/icon8.png') }}" alt="icon" width="71" height="80"></figure>
                            <h6>Lorem Ipsum Dolor Sit</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius m od tempor.</p>
                        </div>
                    </li>
                    <li>
                    	<h2>3</h2>
                        <div class="work_cont">
                        	<figure><img src="{{ asset('assets/images/icon9.png') }}" alt="icon" width="73" height="77"></figure>
                            <h6>Lorem Ipsum Dolor Sit</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius m od tempor.</p>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="coin_info_blk">
        	<div class="container">
                <div class="coin_info">
                    <div class="coin_info_left">
                        <figure><img src="{{ asset('assets/images/bit_coins.png') }}" alt="bitcoins" width="643" height="385"></figure>
                    </div>
                    <div class="coin_info_right">
                        <h4>Coin Info</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius<br> m od tempor incididunt ut labore et.</p>
                        <div class="info_website">
                            <ul class="clearfix">
                                <li><a href="#" class="web_icon1">Official website</a></li>
                                <li><a href="#" class="web_icon2">Online wallet</a></li>
                                <li><a href="#" class="web_icon3">Download wallet</a></li>
                                <li class="pad_last"><a href="#" class="web_icon4">Hardware wallet</a></li>
                                <li><a href="#" class="web_icon5">Android wallet</a></li>
                                <li><a href="#" class="web_icon6">Apple wallet</a></li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius<br> m od tempor incididunt ut labore et.<br> dolore magna aliqua.</p>
                        <div class="web_logo">
                        	<ul class="clearfix">
                            	<li><a href="#"><img src="{{ asset('assets/images/logo1.png') }}" alt="logo" width="118" height="25"></a></li>
                                <li><a href="#"><img src="{{ asset('assets/images/logo2.png') }}" alt="logo" width="116" height="30"></a></li>
                                <li class="last"><a href="#"><img src="{{ asset('assets/images/logo3.png') }}" alt="logo" width="128" height="37"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="about_blk">
        	<div class="about_cont_main">
            	<div class="container">
                	<div class="about_cont">
                    	<h3>What People Say ABout Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius m od tempor incididunt ut<br> labore etdolore magna aliqua. Ut enim ad minim veniam.</p>
                        <div class="profile">
                        	<img src="{{ asset('assets/images/img1.png') }}" alt="img" width="86" height="86">
                            <h6>Don Johanson</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br> elit, sed do eiusmod tempor incididunt ut labore et<br> dolore magna aliqua.</p>
                            <ul class="clearfix">
                            	<li><a href="#">&nbsp;</a></li>
                                <li><a href="#">&nbsp;</a></li>
                                <li><a href="#">&nbsp;</a></li>
                                <li><a href="#">&nbsp;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile_img"><figure><img src="{{ asset('assets/images/mobile1.png') }}" alt="mobile" width="297" height="470"></figure></div>
            <div class="ipad_img"><figure><img src="{{ asset('assets/images/ipad_img.png') }}" alt="ipad" width="451" height="795"></figure></div>
        </div>
        <div class="our_blog_blk">
        	<div class="container">
            	<div class="our_blog">
                	<h3>Read Our Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius m od tempor incididunt ut<br> labore etdolore magna aliqua. Ut enim ad minim veniam.</p>
                    <ul>
                    	<li>
                        	<div class="blog_profile">
                            	<div class="blog_profile_head">
                                	<strong>Aria<br> Stark</strong>
                                    <span>Before<br> 45 Minutes</span>
                                    <div class="clear"></div>
                                </div>
                                <figure><img src="{{ asset('assets/images/img2.png') }}" alt="img" width="297" height="183"></figure>
                                <div class="blog_profile_cont">
                                	<h6>Lorem Ipsum Dolor Sit Amet<br> Concesutis Tittle</h6>
                                    <small>12.1.2018</small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <button name="name" type="button" class="btn transition">Read More</button>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="blog_profile center_blk">
                            	<div class="blog_profile_head">
                                	<strong>Aria<br> Stark</strong>
                                    <span>Before<br> 45 Minutes</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="blog_profile_cont">
                                	<h6>Lorem Ipsum Dolor Sit Amet<br> Concesutis Tittle</h6>
                                    <small>12.1.2018</small>
                                    <p class="scroll_bar">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris .nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore. eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat <span>&nbsp;</span></p>
                                    <button name="name" type="button" class="btn active transition">Read More</button>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="blog_profile">
                            	<div class="blog_profile_head">
                                	<strong>Aria<br> Stark</strong>
                                    <span>Before<br> 45 Minutes</span>
                                    <div class="clear"></div>
                                </div>
                                <figure><img src="{{ asset('assets/images/img2.png') }}" alt="img" width="297" height="183"></figure>
                                <div class="blog_profile_cont">
                                	<h6>Lorem Ipsum Dolor Sit Amet<br> Concesutis Tittle</h6>
                                    <small>12.1.2018</small>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <button name="name" type="button" class="btn transition">Read More</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <div class="slide_dots">
                    	<ul class="clearfix">
                        	<li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                        </ul>
                    </div>
                    <div class="left_arw"><a href="#"><img src="{{ asset('assets/images/left_arw.png') }}" alt="arrow" width="48" height="49"></a></div>
                    <div class="right_arw"><a href="#"><img src="{{ asset('assets/images/right_arw.png') }}" alt="arrow" width="48" height="49"></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- maincontent ends -->
    <!-- //Container End -->
@stop

{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <!-- <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script> -->
    <!--page level js ends-->
@stop
