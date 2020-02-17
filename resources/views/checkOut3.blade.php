<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_solid top_panel_show top_panel_above user_menu_show sidebar_hide fixed_top_menu">
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap">
                <div class="menu_user_wrap">
                    <div class="container">
                        <div class="menu_user_area menu_user_right menu_user_nav_area">
                            <ul id="menu_user" class="menu_user_nav">
                                <li class="menu-item">
                                    <a href="contacts">Contact Us</a>
                                </li>
                                <li class="login_wrap">
                                    <a href="account.html">
                                        <span class="icon-profile"></span>
                                        Username
                                    </a>
                                </li>
								 <li class="login_wrap">
                                    <a href="faqs">
                                        <span class="icon-profile"></span>
                                        FAQ'S
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_user_area menu_user_left menu_user_contact_area">Call Us Now: 858.536.4161</div>
                    </div>
                </div>
                <div class="menu_main_wrap logo_left menu_show">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/icon/157x54.png" alt="">
                                <span class="logo_info"></span>
                            </a>
                        </div>
                        <div class="menu_main">
                            <nav class="menu_main_nav_area">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item">
                                        <a href="index.html" class="sf-with-ul">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="account.html">MY Account</a>
                                    </li>
									<li class="menu-item">
                                        <a href="packages" class="sf-with-ul">My Packages</a>
                                    </li>
									<li class="menu-item">
                                        <a href="invoice" class="resources">Invoices</a>
                                    </li>
                                   <li class="menu-item">
                                        <a href="prealert">Prealert</a>
                                    </li>
									 <li class="menu-item current-menu-item">
                                        <a href="checkOut">Check Out</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4 id='yellow'><b>CHECK OUT</b></h4>
							<div class="col-sm-4" align='center'>
							<img id='myImage' alt="1" src="images/checkout/g1.png">
								<h5><b>PAYMENT DETIALS</b></h5>
							</div>
							<div class="col-sm-4" align='center'>
							<img id='myImage' alt="2" src="images/checkout/g2.png">
								<h5><b>REVIEW AND CONFIRM</b></h5>
							</div>
							<div class="col-sm-4" align='center'>
							<img id='myImage' alt="3" src="images/checkout/a3.png">
								<h5><b>ORDER COMPLETE</b></h5>
							</div>
							<div class ='biggerTopBottomPadding'><br></div>
							<h4  class ='biggerTopBottomPadding' id='yellow' align='center'><b>CONFIRMATION</b></h4>
							<div  id='biggerText'>
								<p>Your transcation was successful.
								</p>
								<p>
									Thank you for your payment. Your card was successfully charged for $197.20 for invoice number/s 1234,4535,4646 your package will be
									delivered to the address on file.
								</p>
								<p>
									Note:  An e-mail will be sent to the address on file with this confirmation.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		  @include('includes.footer')
        </div>
    </div>
<div class="preloader">
    <div class="preloader_image"></div>
</div>
    <script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>

    <!--<script type="text/javascript" src="custom_tools/js/front.customizer.js"></script>
    <script type="text/javascript" src="custom_tools/js/skin.customizer.js"></script>-->

    <script type="text/javascript" src="js/_packed.js"></script>
    <script type="text/javascript" src="js/shortcodes.min.js"></script>
    <script type="text/javascript" src="js/_main.js"></script>
</body>
</html>
