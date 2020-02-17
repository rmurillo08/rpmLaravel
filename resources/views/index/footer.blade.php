<section class="fullwidth_section no_padding_top_container dark_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="sc_section">
                    <div class="sc_section_overlay">
                        <div class="sc_section_content">
                            <div class="sc_content container">
                                <div class="sc_contact_form sc_contact_form_standard">
                                    <div class="sc_contact_form_left">
                                        <div class="sc_contact_info">
                                            <h2 class="sc_contact_form_title">contact <br> us</h2>
                                            <div class="sc_contact_form_address_wrap">
                                                <div class="sc_contact_form_address_field">
                                                                    <span class="sc_contact_form_address_data">
                                                                        <b>RPM Express Couriers</b>
                                                                        <br>Trinidad Address:
                                                                        <br>Lot 5 Suite Drive, Trincity Industrial<br> Estate, Trincity
																		<br> Trinidad and Tobago
                                                                    </span>
                                                </div>
                                                <div class="sc_contact_form_address_field">
                                                                    <span class="sc_contact_form_address_data">
                                                                        <br>Miami Address:
                                                                        <br>4500 NW 36 ST, Door 92,
																		<br>Miami, FL 33166, United States
                                                                    </span>
                                                </div>
                                                <div class="sc_contact_form_address_wrap">
                                                    <div class="sc_contact_form_address_field">
                                                        <span class="sc_contact_form_address_label">Phone Number.: </span>
                                                        <span class="sc_contact_form_address_data">+1 (000) 000-00-00</span>
                                                    </div>
                                                    <div class="sc_contact_form_address_field">
                                                        <span class="sc_contact_form_address_label">e-mail: </span>
                                                        <span class="sc_contact_form_address_data">info@rpmexpresscouriers.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="https://www.facebook.com/rpmexpresscouriers/">
                                                <img id = "myImage" src="{{asset('images/icon/fb2.png')}}" alt="fb">
                                            </a>
                                            <a href="https://twitter.com/CouriersRpm">
                                                <img id = "myImage" src="{{asset('images/icon/twi2.png')}}" alt="tweeter">
                                            </a>
                                            <a href="https://www.instagram.com/rpm_expresscouriers/">
                                                <img id = "myImage" src="{{asset('images/icon/insta2.png')}}" alt="instagram">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sc_contact_form_right">
                                        <p class="sc_contact_form_description">Your email address will not be published. Required fields are marked *</p>
                                        <form data-formtype="contact" method="post" action="#">
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
                                                <button>
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
            </div>
        </div>
    </div>
</section>
<section class="copyright_wrap fullwidth_section dark_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <p>RPM Express Couriers © {{ now()->year }} All Rights Reserved.
                        <a href="terms">Terms of Use</a>
                        and
                        <a href="privacy">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
