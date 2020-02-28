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
            <section class="top_panel_image top_panel_bg10">
                <div class="top_panel_image_header">
                    <h1 class="top_panel_image_title entry-title">Contact US</h1>
                </div>
            </section>
			<section class="fullwidth_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="sc_content container" align='center'>
								<h2>OUR LOCATIONS</h2>
								<p>Our central United States hub is located in Miami, Florida. We strive to serve the Caribbean with offices in Trinidad and Antigua.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
                <section class="fullwidth_section no_padding_container ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sc_section">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <div class="page_content">
                <section class="fullwidth_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sc_content container">
                                    <div class="sc_contact_form sc_contact_form_standard standard_light">
                                        <div class="sc_contact_form_left">
                                            <div class="sc_contact_info">
                                                <h2 class="sc_contact_form_title">contact us</h2>
                                                <div class="sc_contact_form_address_wrap">
                                                    <div class="sc_contact_form_address_field">
                                                        <span class="sc_contact_form_address_data">
                                                            <b>RPM Express Couriers</b><br>
                                                            Trinidad Address <br>
															Lot 5 Suite Drive, Trincity Industrial<br>
															Estate, Trincity <br>
															Trinidad and Tobago<br><br>
															Miami Address <br>
															4500 NW 36 ST, Door 92, <br>
															Miami, FL 33166, USA<br><br>
															<span class="sc_contact_form_address_label">Phone Number: </span>
															<span class="sc_contact_form_address_data">+1 (44) </span>
															<span class="sc_contact_form_address_label">e-mail: </span>
															<span class="sc_contact_form_address_data">customerservice@rpmexpresscouriers.com</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_contact_form_right">
                                            <form data-formtype="contact" method="post" action="include/sendmail.php" class="contact-form inited">
                                                <div class="sc_contact_form_info">
                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                        <label class="required" for="sc_contact_form_username">Name</label>
                                                        <input id="sc_contact_form_username" type="text" name="username" placeholder="Name">
                                                    </div>
                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                        <label class="required" for="sc_contact_form_email">E-mail</label>
                                                        <input id="sc_contact_form_email" type="text" name="email" placeholder="Email">
                                                    </div>
                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                        <label class="required" for="sc_contact_form_subj">Subject</label>
                                                        <input id="sc_contact_form_subj" type="text" name="subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="sc_contact_form_item sc_contact_form_message label_over">
                                                    <label class="required" for="sc_contact_form_message">Message</label>
                                                    <textarea id="sc_contact_form_message" name="message" placeholder="Message"></textarea>
                                                </div>
                                                <div class="sc_contact_form_item sc_contact_form_button">
                                                    <button type="submit">
                                                        Send message
                                                        <span class="icon-mail-alt"></span>
                                                    </button>
                                                </div>
                                                <div class="result sc_infobox"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <footer class="footer_wrap bg_tint_dark footer_style_dark widget_area">
            @include('includes.footer')
        </footer>
        </div>
    </div>

<div class="preloader">
    <div class="preloader_image"></div>
</div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{env('API_KEY')}}&callback=initMap"
            async defer>
    </script>
    <script type="text/javascript" src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>

    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
{{--    <script type='text/javascript' src='js/core.googlemap.js'></script>--}}

    <!--<script type="text/javascript" src="custom_tools/js/front.customizer.js"></script>
    <script type="text/javascript" src="custom_tools/js/skin.customizer.js"></script>-->

    <script type="text/javascript" src="js/_packed.js"></script>
    <script type="text/javascript" src="js/shortcodes.min.js"></script>
    <script type="text/javascript" src="js/_main.js"></script>

</body>
</html>
