<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- from origin file -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=1204">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
        BTCKOpen
        @show
    </title>
    <!--global css starts-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}"> -->
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <div class="wrapper">
        <!-- Header Start -->
        <header>
            <div class="container">
                <div class="header_in">
                    <div class="logo"><a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="172" height="15"></a></div>
                    <div class="header_rgiht">
                        <nav>
                            <ul class="clearfix">
                                <li><a href="#">home</a></li>
                                <li><a href="#">about us</a></li>
                                <li class="sub_menu">
                                    <a href="#">products</a>
                                    <ul class="clearfix">
                                        <li><a href="#" class="icon1">Ethereum</a></li>
                                        <li><a href="#" class="icon2">Straits</a></li>
                                        <li><a href="#" class="icon3">Ripple</a></li>
                                        <li><a href="#" class="icon4">Litecoin</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/arrow1.png') }}" alt="arrow" width="18" height="9"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="buy_sell_btn">
                            <ul class="clearfix">
                                <li class="last"><button name="name" type="button" class="btn active transition">Buy</button></li>
                                <li><button name="name" type="button" class="btn transition">sell</button></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="banner">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do</p>
                    <h1>Best Coin Market On The World</h1>
                    <ul class="clearfix">
                        <li class="flt_lt">
                            <div class="buy_sell">
                                <h2><span><img src="{{ asset('assets/images/b_icon.png') }}" alt="icon" width="43" height="61"></span> Buy bitcoin</h2>
                                <ul>
                                    <li class="b_coin"><input name="name" type="text" placeholder="Bitcoin"></li>
                                    <li class="eu_coin"><input name="name" type="text" placeholder="Euro"></li>
                                    <li class="clearfix"><button name="name" type="button" class="btn flt_rt transition">Buy</button></li>
                                </ul>
                            </div>
                            <div class="bit_coin_menu">
                                <ul class="clearfix">
                                    <li><a href="#" class="icon1">Ethereum</a></li>
                                    <li><a href="#" class="icon2">Straits</a></li>
                                    <li><a href="#" class="icon3">Ripple</a></li>
                                    <li><a href="#" class="icon4">Litecoin</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/images/arrow1.png') }}" alt="arrow" width="18" height="9"></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="flt_rt"> 
                            <div class="buy_sell">
                                <h2 class="sell"><span><img src="{{ asset('assets/images/e_icon.png') }}" alt="icon" width="50" height="58"></span> Sell bitcoin</h2>
                                <ul>
                                    <li class="eu_coin"><input name="name" type="text" placeholder="Euro"></li>
                                    <li class="b_coin"><input name="name" type="text" placeholder="Bitcoin"></li>
                                    <li class="clearfix"><button name="name" type="button" class="btn sell flt_rt transition">Sell</button></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- //Header End -->

        <!-- Content -->
        @yield('content')

        <!-- Footer Section Start -->
        <footer>
            <div class="container">
                <div class="footer_top">
                    <div class="fot-logo">
                        <a href="#"><img src="{{ asset('assets/images/footer_logo.png') }}" alt="fot_logo" width="234" height="20"></a>
                    </div>
                    <div class="subscribe">
                        <h3>SUBSCRIBE</h3>
                        <input type="text" value="Enter your email address..." class="text_fld" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    </div>
                    <div class="social_icons">
                        <ul>
                            <li><a href="#"><img src="{{ asset('assets/images/social_icon1.png') }}" alt="icon" width="30" height="29"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/social_icon2.png') }}" alt="icon" width="30" height="29"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/social_icon3.png') }}" alt="icon" width="30" height="29"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/social_icon4.png') }}" alt="icon" width="30" height="29"></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="footer_bot">
                    <div class="list_block">
                        <h3>about us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>    
                    </div>
                    <div class="list_block list_block2">
                        <h3>Site Map</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Help &amp; Support</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms Of Service</a></li>
                        </ul>   
                    </div>
                    <div class="list_block list_block3">
                        <h3>help &amp; support</h3>
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Help &amp; support</a></li>
                            <li><a href="#">Webinars</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                        </ul>   
                    </div>
                    <div class="list_block list_block4">
                        <h3>contact info</h3>
                        <ul>
                            <li><a href="mailto:Support@apolonia.com"><img src="{{ asset('assets/images/msg_icon.png') }}" alt="icon"> Support@apolonia.com</a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/phone_icon.png') }}" alt="icon"> (+316) 15-34-38-41</a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/phone_icon.png') }}" alt="icon"> +31 6 15 34 38 41</a></li>
                        </ul>   
                    </div>
                <div class="clear"></div>
                </div>
            </div>
            <div class="copy_right">
                <p>Copyright 2017 Mantis Marine. All Rights Reserved.</p>
            </div>
        </footer>
   </div>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
