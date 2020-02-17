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
                @include('includes.headers')
            </header>
			<section class="top_panel_image top_panel_bg11">
                <div class="top_panel_image_header">
                    <h1 class="top_panel_image_title entry-title">Registration</h1>
            </section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12" align = 'center'>
							<img id = 'images' src="images/icon/box.png">
							<h3 class="sc_title sc_title_regular">ALMOST DONE!</h3>
							<p id = 'biggerText'>Thank you for becoming a member of RPM Express couriers.</p>
							<p id = 'biggerText'>
								We have sent an email to {{$email}} with a confirmation link. Please confirm your email and account by clicking on the link.
								The link in the email will expire in 1 day. If you do not see it in your inbox, be sure to check your spam or junk folders.</p>
							<p id = 'biggerText'>We look forward to working with you!</p>
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
