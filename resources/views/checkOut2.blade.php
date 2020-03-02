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
                @include('includes.accountHeaders')
            </header>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4 id='yellow'><b>CHECK OUT</b></h4>
							<div class="col-sm-4 biggerTopBottomPadding" align='center'>
							<img id='myImage' alt="1" src="images/checkout/g1.png">
								<h5><b>PAYMENT DETIALS</b></h5>
							</div>
							<div class="col-sm-4 biggerTopBottomPadding" align='center'>
							<img id='myImage' alt="2" src="images/checkout/a2.png">
								<h5><b>REVIEW AND CONFIRM</b></h5>
							</div>
							<div class="col-sm-4 biggerTopBottomPadding" align='center'>
							<img id='myImage' alt="3" src="images/checkout/g3.png">
								<h5><b>ORDER COMPLETE</b></h5>
							</div>
							<div class="col-sm-12">
								<div class="col-sm-6" align='left' id='backgroundColor'>
									<p>Payment Method
									</p>
									<form class="myForm1" id='backgroundColor' method="get" action="">
										<p id='label1'>
										  <input id='almostCompleteWidth' type="text" name="cardType" placeholder='Credit Card choose'>
										</p>
										<p>
										  <input id='almostCompleteWidth' type="text" name="cardName"  placeholder='Card Name'>
										</p>
										<p>
										  <input id='almostCompleteWidth' type="text" name="address" placeholder='Address'>
										</p>
									    <p>
										  <input id='almostCompleteWidth' type="text" name="state" placeholder='State'>
										</p>
									    <p>
										  <input id='almostCompleteWidth' type="text" name="country" placeholder='Country'>
										  <br>
										</p>
										<p  class='topPadding7'id='backgroundColor'>
											<br>
										</p>
									</form>
								</div>
								<div class="col-sm-6" >
									<table class="tg1 mine">
									  <tr class='mine'>
										<th class='mine'>Airway <br> Bill #</th>
										<th class="mine">Invoice <br> Amount(TT$)</th>
									  </tr>
								  </table>

								</div>
							</div>
						</div>
						<div class='biggerTopBottomPadding' align='center'>
								<img id='cardsImage' alt="visa" src="images/services/visa.png">
								<img id='cardsImage' alt="master card" src="images/services/master.png">
								<img id='cardsImage' alt="commerce" src="images/services/commerce.png">
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
