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
                </div>
            </section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="sc_title sc_title_regular" align='left'>SIGN UP FOR FREE</h2>
							<p>	Get started today with RPM Express Couriers. Once you complete the form below we will send you an email confirming your account creation.
								Check your spam folder if you do not see our email in your inbox
							</p>
							<h3 class='smallLeftPadding topBottomPadding' id = 'backgroundYellowColor'>Account Information</h3>
							<form id='registration' class="" method="post" action="{{URL:: to('register')}}"
								oninput='repeatPassword.setCustomValidity(repeatPassword.value !== password.value ? "Passwords do not match." : "");
								confirm.setCustomValidity(confirm.value !== email.value ? "Emails do not match." : "");'
							> {{csrf_field()}}
								<p>Select Package Destination:
									<select  required id="deliveryCountry" name="delivery_country">
										<option disabled selected value value="delivery_country" selected="selected">Choose country of destination</option>
										<option value="Acono">Acono</option>
										<option value="Aranguez">Aranguez</option>
										<option value="Argyle">Argyle</option>
										<option value="Arima">Arima</option>
										<option value="Aripero">Aripero</option>
										<option value="Aripo">Aripo</option>
										<option value="Arouca">Arouca</option>
										<option value="Balandra">Balandra</option>
										<option value="Bamboo">Bamboo</option>
										<option value="Bamboo Settlement Number 1">Bamboo Settlement Number 1</option>
										<option value="Bamboo Settlement Number 2">Bamboo Settlement Number 2</option>
										<option value="Bamboo Settlement Number 3">Bamboo Settlement Number 3</option>
										<option value="Bamboo Village">Bamboo Village</option>
										<option value="Barataria">Barataria</option>
										<option value="Barrackpore">Barrackpore</option>
										<option value="Basseterre">Basseterre</option>
										<option value="Belle Garden">Belle Garden</option>
										<option value="Belmont">Belmont</option>
										<option value="Betsy's Hope">Betsy's Hope</option>
										<option value="Biche">Biche</option>
										<option value="Black Rock">Black Rock</option>
										<option value="Blanchisseuse">Blanchisseuse</option>
										<option value="Bloody Bay">Bloody Bay</option>
										<option value="Bon Accord">Bon Accord</option>
										<option value="Bon Air">Bon Air</option>
										<option value="Bonne Aventure">Bonne Aventure</option>
										<option value="Brasso Seco Paria">Brasso Seco Paria</option>
										<option value="Brasso Venado">Brasso Venado</option>
										<option value="Brazil">Brazil</option>
										<option value="Buccoo">Buccoo</option>
										<option value="Buenos Ayres">Buenos Ayres</option>
										<option value="California">California</option>
										<option value="Canaan">Canaan</option>
										<option value="Cantaro">Cantaro</option>
										<option value="Caparo">Caparo</option>
										<option value="Carapichaima">Carapichaima</option>
										<option value="Carenage">Carenage</option>
										<option value="Carnbee">Carnbee</option>
										<option value="Castara">Castara</option>
										<option value="Cedros">Cedros</option>
										<option value="Chacachacare Island">Chacachacare Island</option>
										<option value="Chaguanas">Chaguanas</option>
										<option value="Chaguaramas">Chaguaramas</option>
										<option value="Champs Fleurs">Champs Fleurs</option>
										<option value="Charlieville">Charlieville</option>
										<option value="Charlotteville">Charlotteville</option>
										<option value="Charuma">Charuma</option>
										<option value="Chase Village">Chase Village</option>
										<option value="Claxton Bay">Claxton Bay</option>
										<option value="Cleghorn Village">Cleghorn Village</option>
										<option value="Clifton Hill">Clifton Hill</option>
										<option value="Coalmine">Coalmine</option>
										<option value="Cochrane Village">Cochrane Village</option>
										<option value="Cocorite">Cocorite</option>
										<option value="Coral Gardens">Coral Gardens</option>
										<option value="Corinth">Corinth</option>
										<option value="Coryal">Coryal</option>
										<option value="Couva">Couva</option>
										<option value="Crown Point">Crown Point</option>
										<option value="Cumaca">Cumaca</option>
										<option value="Cumana">Cumana</option>
										<option value="Cunupia">Cunupia</option>
										<option value="Curepe">Curepe</option>
										<option value="D'Abadie">D'Abadie</option>
										<option value="Debe">Debe</option>
										<option value="Delaford">Delaford</option>
										<option value="Diego Martin">Diego Martin</option>
										<option value="Downtown">Downtown</option>
										<option value="Duncan Village">Duncan Village</option>
										<option value="Eccles Village">Eccles Village</option>
										<option value="Edinburgh Gardens">Edinburgh Gardens</option>
										<option value="Edinburgh Village">Edinburgh Village</option>
										<option value="El Dorado">El Dorado</option>
										<option value="El Luengo Village">El Luengo Village</option>
										<option value="El Socorro">El Socorro</option>
										<option value="Ellerslie Park">Ellerslie Park</option>
										<option value="Enterprise">Enterprise</option>
										<option value="Erin">Erin</option>
										<option value="Esperance">Esperance</option>
										<option value="Farnum Village">Farnum Village</option>
										<option value="Federation Park">Federation Park</option>
										<option value="Felicity">Felicity</option>
										<option value="Five Rivers">Five Rivers</option>
										<option value="Flagstaff">Flagstaff</option>
										<option value="Flanagin's Town">Flanagin's Town</option>
										<option value="Four Roads Tamana">Four Roads Tamana</option>
										<option value="Frederick Settlement">Frederick Settlement</option>
										<option value="Freeport">Freeport</option>
										<option value="Fyzabad">Fyzabad</option>
										<option value="Galeota Point">Galeota Point</option>
										<option value="Gasparillo">Gasparillo</option>
										<option value="Glamorgan">Glamorgan</option>
										<option value="Glencoe">Glencoe</option>
										<option value="Golconda">Golconda</option>
										<option value="Goldsborough">Goldsborough</option>
										<option value="Gooding Village">Gooding Village</option>
										<option value="Goodwood">Goodwood</option>
										<option value="Gopaul Lands">Gopaul Lands</option>
										<option value="Guaico">Guaico</option>
										<option value="Guapo">Guapo</option>
										<option value="Guayaguayare">Guayaguayare</option>
										<option value="Harmony Hall">Harmony Hall</option>
										<option value="Hermitage">Hermitage</option>
										<option value="Homeland Gardens">Homeland Gardens</option>
										<option value="Icacos">Icacos</option>
										<option value="Iere Village">Iere Village</option>
										<option value="John Dial">John Dial</option>
										<option value="John John">John John</option>
										<option value="Kelly Village">Kelly Village</option>
										<option value="L'anse Fourmi">L'anse Fourmi</option>
										<option value="La Brea">La Brea</option>
										<option value="La Horquetta">La Horquetta</option>
										<option value="La Mango">La Mango</option>
										<option value="La Paille">La Paille</option>
										<option value="La Romain">La Romain</option>
										<option value="La Seiva">La Seiva</option>
										<option value="Lambeau">Lambeau</option>
										<option value="Lange Park">Lange Park</option>
										<option value="Las Cuevas">Las Cuevas</option>
										<option value="Las Lomas">Las Lomas</option>
										<option value="Laventille">Laventille</option>
										<option value="Les Coteaux">Les Coteaux</option>
										<option value="Libertyville">Libertyville</option>
										<option value="Longdenville">Longdenville</option>
										<option value="Lopinot">Lopinot</option>
										<option value="Lorensotte">Lorensotte</option>
										<option value="Los Bajos">Los Bajos</option>
										<option value="Los Gallos">Los Gallos</option>
										<option value="Los Iros">Los Iros</option>
										<option value="Louis D'or">Louis D'or</option>
										<option value="Lower Fishing Pond">Lower Fishing Pond</option>
										<option value="Lowlands">Lowlands</option>
										<option value="Macaulay">Macaulay</option>
										<option value="Macoya">Macoya</option>
										<option value="Malabar">Malabar</option>
										<option value="Maloney">Maloney</option>
										<option value="Mamon">Mamon</option>
										<option value="Mamoral">Mamoral</option>
										<option value="Manzanilla">Manzanilla</option>
										<option value="Marabella">Marabella</option>
										<option value="Maracas">Maracas</option>
										<option value="Maraval">Maraval</option>
										<option value="Maraval">Maraval</option>
										<option value="Mason Hall">Mason Hall</option>
										<option value="Matelot">Matelot</option>
										<option value="Matura">Matura</option>
										<option value="Mayaro">Mayaro</option>
										<option value="Mon Repos">Mon Repos</option>
										<option value="Monkey Town">Monkey Town</option>
										<option value="Monos Island">Monos Island</option>
										<option value="Montgomery">Montgomery</option>
										<option value="Montrose">Montrose</option>
										<option value="Moriah">Moriah</option>
										<option value="Moruga">Moruga</option>
										<option value="Morvant">Morvant</option>
										<option value="Mount Hope">Mount Hope</option>
										<option value="Mount Irvine">Mount Irvine</option>
										<option value="Mount Pleasant">Mount Pleasant</option>
										<option value="Mount Saint George">Mount Saint George</option>
										<option value="Mount Stewart Village">Mount Stewart Village</option>
										<option value="Nestor">Nestor</option>
										<option value="New Grange">New Grange</option>
										<option value="New Grant">New Grant</option>
										<option value="Old Grange">Old Grange</option>
										<option value="Orchard Gardens">Orchard Gardens</option>
										<option value="Oropouche">Oropouche</option>
										<option value="Oropune">Oropune</option>
										<option value="Other">Other</option>
										<option value="Palmyra Village">Palmyra Village</option>
										<option value="Palo Seco">Palo Seco</option>
										<option value="Parlatuvier">Parlatuvier</option>
										<option value="Patience Hill">Patience Hill</option>
										<option value="Pembroke">Pembroke</option>
										<option value="Penal">Penal</option>
										<option value="Petit Bourg">Petit Bourg</option>
										<option value="Petit Valley">Petit Valley</option>
										<option value="Phillipines">Phillipines</option>
										<option value="Piarco">Piarco</option>
										<option value="Pigeon Point">Pigeon Point</option>
										<option value="Piparo">Piparo</option>
										<option value="Pleasantville">Pleasantville</option>
										<option value="Plum">Plum</option>
										<option value="Plum Mitan">Plum Mitan</option>
										<option value="Plymouth">Plymouth</option>
										<option value="Point Cumana">Point Cumana</option>
										<option value="Point Fortin">Point Fortin</option>
										<option value="Point Radix">Point Radix</option>
										<option value="Pointe-a-Pierre">Pointe-a-Pierre</option>
										<option value="Poole">Poole</option>
										<option value="Poolside">Poolside</option>
										<option value="Poonah">Poonah</option>
										<option value="Port of Spain">Port of Spain</option>
										<option value="Preysal">Preysal</option>
										<option value="Princes Town">Princes Town</option>
										<option value="Rambert Village">Rambert Village</option>
										<option value="Rampanalgas">Rampanalgas</option>
										<option value="Rancho Quemado">Rancho Quemado</option>
										<option value="Ravine Sable">Ravine Sable</option>
										<option value="Reform">Reform</option>
										<option value="Retrench Village">Retrench Village</option>
										<option value="Rio Claro">Rio Claro</option>
										<option value="Rousillac">Rousillac</option>
										<option value="Roxborough">Roxborough</option>
										<option value="Saint Ann's">Saint Ann's</option>
										<option value="Saint Augustine">Saint Augustine</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Joseph">Saint Joseph</option>
										<option value="Saint Joseph Village">Saint Joseph Village</option>
										<option value="Sainte Madeleine">Sainte Madeleine</option>
										<option value="Salybia">Salybia</option>
										<option value="San Fernando">San Fernando</option>
										<option value="San Juan">San Juan</option>
										<option value="San Raphael">San Raphael</option>
										<option value="Sangre Grande">Sangre Grande</option>
										<option value="Santa Cruz">Santa Cruz</option>
										<option value="Santa Flora">Santa Flora</option>
										<option value="Santa Rosa">Santa Rosa</option>
										<option value="Scarborough">Scarborough</option>
										<option value="Sea Lots">Sea Lots</option>
										<option value="Signal Hill">Signal Hill</option>
										<option value="Siparia">Siparia</option>
										<option value="Soledad">Soledad</option>
										<option value="Speyside">Speyside</option>
										<option value="Springland">Springland</option>
										<option value="Sunrise Park">Sunrise Park</option>
										<option value="Tabaquite">Tabaquite</option>
										<option value="Tableland">Tableland</option>
										<option value="Tacarigua">Tacarigua</option>
										<option value="Talparo">Talparo</option>
										<option value="Toco">Toco</option>
										<option value="Todds Road">Todds Road</option>
										<option value="Trincity">Trincity</option>
										<option value="Tunapuna">Tunapuna</option>
										<option value="Union Village">Union Village</option>
										<option value="Uptown">Uptown</option>
										<option value="Valencia">Valencia</option>
										<option value="Valsayn">Valsayn</option>
										<option value="Vance River">Vance River</option>
										<option value="Vessigny">Vessigny</option>
										<option value="Vistabella">Vistabella</option>
										<option value="Wallerfield">Wallerfield</option>
										<option value="Waterloo">Waterloo</option>
										<option value="Wellington">Wellington</option>
										<option value="Westmoorings">Westmoorings</option>
										<option value="Whiteland">Whiteland</option>
										<option value="WilliamsVille">WilliamsVille</option>
										<option value="Woodbrook">Woodbrook</option>
									</select>
								</p>
								<div class="col-sm-6">
									<p>Contact Information</p>
									<p>
										<input id='completeWidth' type="text" name="first_name" placeholder='First Name' required>
									</p>
									<p>
										<input id='completeWidth' type="email" name="email"  placeholder='Email Address' required>
									</p>
									<p>
										<input id='completeWidth' type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" placeholder='Password' required>
									</p>

									Password Requirements:<br>
									Password must be a minimum of eight (8) characters in length<br>
									Contain at least one (1) Uppercase letter and one (1) number</p>
									  <p>
										  <select id="completeWidth" name="id_type" required>
											<option disabled selected value value="id_type" selected="selected">Select ID Type</option>
											 <option value="National Id">National ID</option>
											 <option value="Driver License">Driver's License </option>
											 <option value="Passport Id">Passport ID</option>
										  </select>
									  </p>
										  <input id='completeWidth' type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="primary_telephone"  placeholder='Primary Phone Number Exe: XXX-XXX-XXXX' required>
									  </p>
									  <p>Delivery Preferences</p>
									  <div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="pickup" name="pick_up">
										<label class="custom-control-label" for="pickup"> I will pick up my packages at the this.country Location</label>
									</div>
									  <div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="delivery" name="delivery">
										<label class="custom-control-label" for="delivery"> Deliver my packages to the following address</label>
									</div>
									<p>
										<input id='completeWidth' type="text" name="primary_address" placeholder='Address 1' required>
									</p>
									<p>
										<input id='completeWidth' type="text" name="city"  placeholder='City' required>
									</p>
									<p>Authorized Users<br>
										I Authorize the individuals listed below to ship and collect pacakges on my account
									</p>
									<p>
										<input id='completeWidth' type="text" name="authorized1FirstName" placeholder='First Name'>
									</p>
									<p>
										<input id='completeWidth' type="text" name="authorized2FirstName" placeholder='First Name'>
									</p>
									<p>How did you hear about us?</p>
									<select id="completeWidth" name="heard" requiered>
											<option id='completeWidth' value="other" selected="selected">Other</option>
											<option value="google">Google</option>
											<option value="instagram">Instagram</option>
											<option value="fb">Facebook </option>
											<option value="friend">Friend</option>
									</select>
								</div>
								<div class="col-sm-6">
									<p>
										<br>
									</p>
									<p>
										<input id='completeWidth' type="text" name="last_name" placeholder='Last Name' required>
									</p>
									<p>
										<input id='completeWidth' type="email" name="confirm"  placeholder='Confirm Email Address' required>
									</p>
									<p>
										<input id='completeWidth' type="password" name="repeatPassword" placeholder='Retype Password' required>
									</p>
									<p>
									<p><br><br></p>
										<input id='completeWidth' type="text" name="id_number"  placeholder='ID #' required>
									</p>
									<p>
										<input id='completeWidth' type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="secondary_telephone" placeholder='Secondary Phone Number'>
									</p>
									<p>
										<br><br><br><br><br>
										<input id='completeWidth' type="text" name="secondary_address" placeholder='Address 2'>
									</p>
									<p>
										<input id='completeWidth' type="text" name="country"  placeholder='Country' required>
									</p>
									<p>
										<br><br><br><br>
										<input id='completeWidth' type="text" name="authorized1LastName" placeholder='Last Name'>
									</p>
									<p>
										<input id='completeWidth' type="text" name="authorized2LastName" placeholder='Last Name'>
									</p>
								</div>
								<div class="col-sm-12">
									<p><br>
									RPM Express Couriers is responsible for the conﬁdential use of your personal information and it will not be given to third parties.
									<a href="privacy">See privacy policy.</a>
									</p>
									  <div class="custom-control custom-checkbox">
										<input required id="acceptTerms" type="checkbox" name="acceptTerms" class="custom-control-input"
											onchange="document.getElementById('registerButtom').disabled =! this.checked;"
										/>
										<label class="custom-control-label bottomPadding" for="acceptTerms"> I accept the <a href="terms">terms and conditions</a>  of the Memebership
											Agreement to RPM Express Couriers.
										</label>
                                      </div>
									 <input disabled id="registerButtom" type="image" name="submit" src="images/icon/register.jpg" >
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
								</div>
							</form>
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
