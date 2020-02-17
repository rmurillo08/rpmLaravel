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
				<div>
					<div class="col-sm-9" id='blue'>
						ID. RPM123456789
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
                                   <li class="menu-item current-menu-item">
                                        <a href="prealert">Prealert</a>
                                    </li>
									 <li class="menu-item">
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
							<div class="col-sm-3" align='center'></div>
							<div class="col-sm-6" align='left'>
								<h4 id='yellow'><b>PRE-ALERT</b></h4>
								<p>Use this service to alert us of your incoming shipment prior to them arriving in miami. Please note Pre-Alerts should
									be sent at least 48 hours before your item’s are delivery to us.
								</p>
								<form class="myForm1"  method="get" action="">
								<div id='backgroundColor'>
								  <p><br>
									<label id='label1'>Shipper/Supplier:
									  <input type="text" name="shipper" placeholder='Amazon, Macys, eBay' required>
									</label>
								  </p>
								  <p>
									<label id='label1'>Courier Company
									  <select id="courier" name="courier" requiered>
										<option value="courierCompany" selected="selected">Choose Courier</option>
										<option value="fedex" >Fedex</option>
										<option value="amazon" >Amazon</option>
										<option value="ups" >UPS</option>
										<option value="dhl" >DHL</option>
										<option value="leasership" >Leasership</option>
										<option value="usps" >USPS</option>
										<option value="dropoff" >Drop Off</option>
									  </select>
									</label>
								  </p>
								  <p>
									<label id='label1'>Tracking Number
									  <input type="text" name="tracking_number"  placeholder='XXXXXXXXXXX' required>
									</label>
								  </p>
								  	<label id='label1'>Description
									  <select id="courier" name="courier">
										<option value="description" selected="selected">Choose a Category</option>
										<option>Alarm (Motor Vehicle)</option>
										<option> Album</option>
										<option> All Clothing </option>
										<option> Amplifier</option>
										<option> Appliances</option>
										<option> Baby Play Pen </option>
										<option> Bag</option>
										<option> Bed Linen </option>
										<option> Bicycle</option>
										<option> Blank DVDs & CDSs </option>
										<option> Bluetooth Headset </option>
										<option> Books</option>
										<option> Calculator</option>
										<option> Camera</option>
										<option> Camera Lens </option>
										<option> Candles</option>
										<option> Car Parts </option>
										<option> CD ROM (Software) </option>
										<option> CDs</option>
										<option> CDs (music)</option>
										<option> Cellular Phones and Accessories </option>
										<option> Christmas Lights </option>
										<option> Christmas Tree (Artificial) </option>
										<option> Coffee</option>
										<option> Computer Parts </option>
										<option> Computer Systems </option>
										<option> Computer Tower </option>
										<option> Computer Tower Case</option>
										<option> Cosmetics</option>
										<option> Costume Jewelry </option>
										<option> Digital Cameras </option>
										<option> Diving Gear </option>
										<option> DVD's </option>
										<option> Electronics</option>
										<option> Envelopes</option>
										<option> Ethernet Hub </option>
										<option> Fax and Line Modems</option>
										<option> Food Supplies</option>
										<option> Furniture </option>
										<option> Game Accessories</option>
										<option> Hand Held Tools</option>
										<option> Head Lights (Motor Vehicle) </option>
										<option> Headphones</option>
										<option> Ink Cartridges </option>
										<option> iPad (no Sim Card Slot) / Tablets PCs
										<option>iPad ( With Sim Card Slot) </option>
										<option> iPods / Musical Storage Devices </option>
										<option> Jewelry </option>
										<option> Kitchen Accessories </option>
										<option> Lab Ware</option>
										<option> Laptops</option>
										<option> Medical Apparel </option>
										<option> Monitor (Computer)</option>
										<option> Monitor (display) </option>
										<option> Mother Boards</option>
										<option> Musical Equipment </option>
										<option> Pet Food </option>
										<option> Plumbing </option>
										<option> Pressure Washer</option>
										<option> Printer (3 in one)</option>
										<option> Printer ( not 3 in one Machines) </option>
										<option> Printer Cartridge </option>
										<option> Processors </option>
										<option> Projector Screen </option>
										<option> Remote Control </option>
										<option> Router </option>
										<option> Safety Helmet </option>
										<option> Shoes</option>
										<option> Speakers </option>
										<option> Sunglasses </option>
										<option> Toys </option>
										<option> Video Game Console </option>
										<option> Vitamins & Food Supplements </option>
										<option> Watches </option>
										<option> Wheel Chair</option>
										<option> Wig - Human Hair</option>
										<option> Wig - Synthetic </option>
										<option> Other</option>
									  </select>
									</label>
								  </p>
								   <p>
									<label id='label1'>Other:
									  <input type="text" name="other" placeholder='Enter Description'>
									</label>
								  </p>
								  <p>
									<label id='label1'>Cost of Shipment in US$:
									  <input type="text" name="cost" placeholder='$0.00'>
									  (Including Shipping)
									</label>
									<br>
								</div>
									<p></p>
									*You are responsible for listing the correct and true amount of your shipment. This information is given to customs.
									<div class="col-sm-12" align='center'>
										<img alt="submit" id='getStarted' src="images/account/preAlert.png">
										<p> By pre-alerting you accept our <a href="terms">terms and conditions</a>.
										</p>
									</div>
								  </p>
								</form>
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
