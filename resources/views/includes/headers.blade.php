<div class="menu_user_wrap">
    <div class="container">
        <div class="menu_user_area menu_user_right menu_user_nav_area">
            <ul id="menu_user" class="menu_user_nav">
                <li class="menu-item">
                    <a href="contacts">Contact Us</a>
                </li>
                @guest
                    <li>
                        <a href="#user-popUp" class="popup_link popup_login_link">
                            <span class="icon-profile"></span>
                            Log In
                        </a>
                        <div id="user-popUp" class="user-popUp mfp-with-anim mfp-hide">
                            <div class="sc_tabs">
                                <ul class="loginHeadTab" role="tablist">
                                    <li role="tab" aria-controls="loginForm" aria-labelledby="ui-id-1">
                                        <a href="#loginForm" class="loginFormTab icon" id="ui-id-1">Log In</a>
                                    </li>
                                </ul>
                                <div id="loginForm" class="formItems loginFormBody popup_wrap popup_login" aria-labelledby="ui-id-1" role="tabpanel">
                                    <div>
                                        <form action="{{URL:: to('log')}}" method="post" name="login_form" class="popup_form login_form">
                                            {{csrf_field()}}
                                            <div class="icon popup_form_field login_field iconed_field icon-mail">
                                                <input type="text" id="log" name="log" value="" placeholder="Email">
                                            </div>
                                            <div class="icon popup_form_field password_field iconed_field icon-lock-2">
                                                <input type="password" id="password" name="pwd" value="" placeholder="Password">
                                            </div>
                                            <div class="popup_form_field remember_field">
                                                <a href="#" class="forgot_password">Forgot password?</a>
                                                <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                                <label for="rememberme">Remember me</label>
                                            </div>
                                            <div class="popup_form_field submit_field">
                                                <input type="submit" class="submit_button sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium" value="Login">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="signUp">
                            Sign Up
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="menu-item">
                        <a href="account">My Account</a>
                    </li>
                    <li class="menu-item">
                        <a href="logOut">Log Out</a>
                    </li>
                @endauth
                <li class="top_socials">
                    <div class="sc_socials sc_socials_size_tiny">
                        <div class="sc_socials_item">
                            <a href="https://twitter.com/CouriersRpm" target="_blank" class="social_icons social_twitter icons">
                                <span class="icon-twitter"></span>
                                <span class="sc_socials_hover icon-twitter"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="https://www.facebook.com/rpmexpresscouriers/" target="_blank" class="social_icons social_facebook icons">
                                <span class="icon-facebook"></span>
                                <span class="sc_socials_hover icon-facebook"></span>
                            </a>
                        </div>
                        <div class="sc_socials_item">
                            <a href="https://www.instagram.com/rpm_expresscouriers/" target="_blank" class="social_icons">
                                <span class="icon-camera-alt"></span>
                                <span class="sc_socials_hover icon-camera-alt"></span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="menu_user_area menu_user_left menu_user_contact_area">Call Us Now: 000.000.0000</div>
    </div>
</div>
<div class="menu_main_wrap logo_left menu_show">
    <div class="container">
        <div class="logo">
            <a href="home">
                <img class='logoImage' src="{{asset('images/icon/157x54.png')}}" alt="logo">
                <span class="logo_info"></span>
            </a>
        </div>
        <div class="menu_main">
            <nav class="menu_main_nav_area">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item">
                        <a href="home" class="sf-with-ul">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="ourServices">Our services</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="air">AIR FREIGHT</a>
                            </li>
                            <li class="menu-item">
                                <a href="ocean">OCEAN FREIGHT</a>
                            </li>
                            <li class="menu-item">
                                <a href="shopper">SHOPPER ASSISTANCE</a>
                            </li>
                            <li class="menu-item">
                                <a href="delivery">DELIVERY NATIONWIDE</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="home#sc_tab_1" class="sc_tabs_titles">Features</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a class="sf-with-ul">RESOURCES</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="customs">Customs</a>
                            </li>
                            <li class="menu-item">
                                <a href="restricted">Restricted Items</a>
                            </li>
                            <li class="menu-item">
                                <a href="insurance">Insurance & Care</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="rates">Rates</a>
                    </li>
                    <li class="menu-item">
                        <a href="faqs">FAQ’S</a>
                    </li>
{{--                    <li class="menu-item menu-item-has-children">--}}
{{--                        <a href="blog.html" class="sf-with-ul">Blog</a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
        </div>
    </div>
</div>
