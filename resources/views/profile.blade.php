<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="images/icon/favicon.ico">
    <title>Global Logistics | Just another HTML site</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" id="packed-css" href="css/_packed.css" type="text/css" media="all">
    <link rel="stylesheet" id="fontello-style-css" href="css/fontello.css" type="text/css" media="all">
    <link rel="stylesheet" id="main-style-css" href="css/main_style.css" type="text/css" media="all">
    <link rel="stylesheet" id="custom-style-css" href="css/custom-style.css" type="text/css" media="all">
    <style id="custom-style-inline-css" type="text/css"></style>
    <link rel="stylesheet" id="responsive-style-css" href="css/responsive.css" type="text/css" media="all">
    <!--<link rel="stylesheet" id="customizer-style-css" href="custom_tools/css/front.customizer.css" type="text/css" media="all">-->
</head>

<body class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_transparent padding_content_yes top_panel_show top_panel_over user_menu_hide sidebar_hide fixed_top_menu profile_page">

    <div class="body_wrap">

        <div class="page_wrap">

            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap">
                <div class="menu_user_wrap">
                    <div class="container">

                        <div class="menu_user_area menu_user_right menu_user_nav_area">
                            <ul id="menu_user" class="menu_user_nav">
                                <li class="menu-item">
                                    <a href="request-a-quote.html">Request A Quote</a>
                                </li>
                                <li class="menu-item">
                                    <a href="contacts">Contact</a>
                                </li>
                                <li class="login_wrap">
                                    <a href="#user-popUp" class="popup_link popup_login_link">
                                        <span class="icon-profile"></span>
                                        Log in
                                    </a>
                                    <div id="user-popUp" class="user-popUp mfp-with-anim mfp-hide">
                                        <div class="sc_tabs">
                                            <ul class="loginHeadTab" role="tablist">
                                                <li role="tab" aria-controls="loginForm" aria-labelledby="ui-id-1">
                                                    <a href="#loginForm" class="loginFormTab icon" id="ui-id-1">Log In</a>
                                                </li>
                                                <li role="tab" aria-controls="registerForm" aria-labelledby="ui-id-2">
                                                    <a href="#registerForm" class="registerFormTab icon ui-tabs-anchor" id="ui-id-2">Create an Account</a>
                                                </li>
                                            </ul>

                                            <div id="loginForm" class="formItems loginFormBody popup_wrap popup_login" aria-labelledby="ui-id-1" role="tabpanel">
                                                <div class="form_left">
                                                    <form action="#" method="post" name="login_form" class="popup_form login_form">
                                                        <input type="hidden" name="redirect_to" value="#">
                                                        <div class="icon popup_form_field login_field iconed_field icon-mail">
                                                            <input type="text" id="log" name="log" value="" placeholder="Login or Email">
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
                                                <div class="form_right">
                                                    <div class="login_socials_title">You can login using your social profile</div>
                                                    <div class="login_socials_list">
                                                        <a href="#" class="iconLogin fb"></a>
                                                        <a href="#" class="iconLogin tw"></a>
                                                        <a href="#" class="iconLogin gg"></a>
                                                    </div>
                                                    <div class="login_socials_problem">
                                                        <a href="#">Problem with login?</a>
                                                    </div>
                                                    <div class="result message_block"></div>
                                                </div>
                                            </div>


                                            <div id="registerForm" class="formItems registerFormBody popup_wrap popup_registration" aria-labelledby="ui-id-2" role="tabpanel">
                                                <form name="registration_form" method="post" class="popup_form registration_form">
                                                    <input type="hidden" name="redirect_to" value="#">
                                                    <div class="form_left">
                                                        <div class="icon popup_form_field login_field iconed_field icon-man">
                                                            <input type="text" id="registration_username" name="registration_username" value="" placeholder="User name (login)">
                                                        </div>
                                                        <div class="icon popup_form_field email_field iconed_field icon-mail">
                                                            <input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail">
                                                        </div>
                                                        <div class="popup_form_field agree_field">
                                                            <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
                                                            <label for="registration_agree">I agree with</label>
                                                            <a href="#">Terms &amp; Conditions</a>
                                                        </div>
                                                        <div class="popup_form_field submit_field">
                                                            <input type="submit" class="submit_button sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_medium" value="Sign Up">
                                                        </div>
                                                    </div>
                                                    <div class="form_right">
                                                        <div class="icon popup_form_field password_field iconed_field icon-lock-2">
                                                            <input type="password" id="registration_pwd" name="registration_pwd" value="" placeholder="Password">
                                                        </div>
                                                        <div class="icon popup_form_field password_field iconed_field icon-lock-2">
                                                            <input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password">
                                                        </div>
                                                        <div class="popup_form_field description_field">Minimum 6 characters</div>
                                                    </div>
                                                </form>
                                                <div class="result messageBlock"></div>
                                            </div>

                                        </div>  <!-- /.sc_tabs -->
                                    </div>      <!-- /.user-popUp -->
                                </li>
                                <li class="top_socials">
                                    <div class="sc_socials sc_socials_size_tiny">
                                        <div class="sc_socials_item">
                                            <a href="https://twitter.com/Theme_REX" target="_blank" class="social_icons social_twitter icons">
                                                <span class="icon-twitter"></span>
                                                <span class="sc_socials_hover icon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="https://www.facebook.com/themerex" target="_blank" class="social_icons social_facebook icons">
                                                <span class="icon-facebook"></span>
                                                <span class="sc_socials_hover icon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="https://plus.google.com/102189073109602153696" target="_blank" class="social_icons social_gplus icons">
                                                <span class="icon-gplus"></span>
                                                <span class="sc_socials_hover icon-gplus"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_linkedin icons">
                                                <span class="icon-linkedin"></span>
                                                <span class="sc_socials_hover icon-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
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
                                <img src="images/icon/157x54.png" class="logo_main" alt="">
                                <span class="logo_info"></span>
                            </a>
                        </div>
                        <div class="menu_main">
                            <nav class="menu_main_nav_area">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="index.html" class="sf-with-ul">Home</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="index.html">Homepage Default</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="homepage-optional.html">Homepage Optional</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="homepage-creative.html">Homepage Creative</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="ourServices">Our services</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children current-menu-ancestor current_page_ancestor">
                                        <a href="#" class="sf-with-ul">Features</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="shortcodes.html">Shortcodes</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="typography.html">Typography</a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" class="sf-with-ul">Gallery</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="grid-alternative.html">Grid Alternative</a>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#" class="sf-with-ul">Classic Style</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="gallery-classic-2-columns.html">2 Columns</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gallery-classic-3-columns.html">3 Columns</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gallery-classic-4-columns.html">4 Columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#" class="sf-with-ul">Grid Style</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="gallery-grid-2-columns.html">2 Columns</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gallery-grid-3-columns.html">3 Columns</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gallery-grid-4-columns.html">4 Columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#" class="sf-with-ul">Masonry Style</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="gallery-masonry-2-columns.html">2 Columns</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gallery-masonry-3-columns.html">3 Columns</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="gallery-masonry-4-columns.html">4 Columns</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery-post.html">Gallery Post</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent">
                                                <a href="#" class="sf-with-ul">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="about-us.html">About Us</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="team.html">Our team</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="our-prices.html">Our Prices</a>
                                                    </li>
                                                    <li class="menu-item current-menu-item">
                                                        <a href="profile">Profile</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="company-timeline.html">Company Timeline</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="support.html">Support</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="not_existing_page.html">Page 404</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="blog.html" class="sf-with-ul">Blog</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#" class="sf-with-ul">Blog Style</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="post-formats-with-sidebar.html">With Sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="post-formats-without-sidebar.html">Without sidebar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="masonry-style.html">Masonry Style</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children ">
                                                <a href="#" class="sf-with-ul">Blog Post</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="standard-post.html">Standard Post</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="standard-post-with-sidebar.html">Standard Post with Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contacts">Contact</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="request-a-quote.html">Request A Quote</a>
                                    </li>
                                </ul>
                            </nav>
                            <a href="#" class="menu_main_responsive_button icon-menu"></a>
                            <div class="search_wrap search_style_regular search_state_closed search_ajax">
                                <div class="search_form_wrap">
                                    <form method="get" class="search_form" action="index.html">
                                        <button type="submit" class="search_submit icon-search" title="Open search"></button>
                                        <input type="text" class="search_field" placeholder="Search" value="" name="s" title="Search">
                                    </form>
                                </div>
                                <div class="search_results widget_area">
                                        <a class="search_results_close icon-cancel"></a>
                                    <div class="search_results_content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <section class="top_panel_image top_panel_bg2">
                <div class="top_panel_image_hover"></div>
                <div class="top_panel_image_header">
                    <h1 class="top_panel_image_title entry-title">Profile</h1>
                    <div class="breadcrumbs">
                        <span class="breadcrumbs_item_first">You Are Here:</span>
                            <a class="breadcrumbs_item home" href="index.html">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">Profile</span>
                    </div>
                </div>
            </section>

            <div class="page_content">

                <section class="fullwidth_section light_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sc_section">
                                    <div class="sc_content container">
                                        <h2 class="sc_title sc_title_regular sc_align_center">Logistic At A Glance</h2>
                                        <div class="sc_columns sc_columns_count_2">
                                            <div class="col-sm-6 sc_column_item">
                                                <figure class="sc_image sc_image_shape_square">
                                                    <img src="images/news/1150x647.png" alt="">
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 sc_column_item">
                                                <div class="sc_section">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam justo lacus, scelerisque eget massa sit amet, mollis ultrices lacus. Cras consectetur cursus nulla, non finibus enim varius nec. Sed pharetra, ex eget convallis vulputate, nulla diam molestie orci, sit amet sodales est quam ut ligula.
                                                    </p>
                                                    <ul class="sc_list sc_list_style_iconed">
                                                        <li class="sc_list_item">
                                                            <span class="sc_list_icon icon-dot"></span>
                                                            Leading provider of modern logistics facilities in London
                                                        </li>
                                                        <li class="sc_list_item">
                                                            <span class="sc_list_icon icon-dot"></span>
                                                            US$25.8 billion property portfolio comprising  28.2 million
                                                        </li>
                                                        <li class="sc_list_item">
                                                            <span class="sc_list_icon icon-dot"></span>
                                                            484 completed properties across 52 cities
                                                        </li>
                                                        <li class="sc_list_item">
                                                            <span class="sc_list_icon icon-dot"></span>
                                                            Domestic demand is a key driver of demand for Logistic
                                                        </li>
                                                        <li class="sc_list_item">
                                                            <span class="sc_list_icon icon-dot"></span>
                                                            Six-time winner of the Logistics Awards from 2002 to 2008
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="fullwidth_section light_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sc_section container">
                                        <div class="col-sm-6 sc_column_item">
                                            <figure class="sc_image  alignleft sc_image_shape_square">
                                                <img src="images/160x135.png" alt="">
                                            </figure>
                                            <div class="sc_section column-auto">
                                                <h4 class="sc_title sc_title_regular">cargo</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam justo lacus, scelerisque eget massa sit amet, mollis ultrices lacus.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <figure class="sc_image  alignleft sc_image_shape_square">
                                                <img src="images/160x135.png" alt="">
                                            </figure>
                                            <div class="sc_section column-auto">
                                                <h4 class="sc_title sc_title_regular">Logistic Services</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam justo lacus, scelerisque eget massa sit amet, mollis ultrices lacus.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <figure class="sc_image  alignleft sc_image_shape_square">
                                                <img src="images/160x135.png" alt="">
                                            </figure>
                                            <div class="sc_section column-auto">
                                                <h4 class="sc_title sc_title_regular">Bulk</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam justo lacus, scelerisque eget massa sit amet, mollis ultrices lacus.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 sc_column_item">
                                            <figure class="sc_image  alignleft sc_image_shape_square">
                                                <img src="images/160x135.png" alt="">
                                            </figure>
                                            <div class="sc_section column-auto">
                                                <h4 class="sc_title sc_title_regular">Fleet Services</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam justo lacus, scelerisque eget massa sit amet, mollis ultrices lacus.</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="fullwidth_section light_section gallery_section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sc_section sc_align_center">
                                    <h2 class="sc_title sc_title_regular sc_align_center">Gallery</h2>
                                    <div id="profile_gallery" class="layout_grid_4big">
                                        <div class="isotope_filters"></div>
                                        <div class="isotope_wrap" data-columns="4">
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_23 flt_28">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="Driving Organizational Alignment" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="Driving Organizational Alignment"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">Driving Organizational Alignment</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Carrier</a>, <a class="post_tag_link" href="#">Transportation</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_29">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="Road Freight Forwarding" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1700x1360.png" title="Road Freight Forwarding"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">Road Freight Forwarding</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Supply Management</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_28">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="Ocean Freight Forwarding" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="Ocean Freight Forwarding"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">Ocean Freight Forwarding</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Transportation</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_29">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="Logistics Planning: From Good to Great" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="Logistics Planning: From Good to Great"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">Logistics Planning: From Good to Great</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Supply Management</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_25">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="2015 European Logistics Update" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="2015 European Logistics Update"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">2015 European Logistics Update</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Delivery</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_23 flt_27">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="The E-commerce Effect" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="The E-commerce Effect"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">The E-commerce Effect</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Carrier</a>, <a class="post_tag_link" href="#">Change</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_28">
                                                <div class="post_item post_item_grid post_item_grid_4big">
                                                    <div class="post_featured img">
                                                        <img alt="2015 Customs/Trade Update" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="2015 Customs/Trade Update"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">2015 Customs/Trade Update</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Transportation</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isotope_item isotope_item_grid isotope_item_grid_4big isotope_column_4 flt_27">
                                                <div class="post_item post_item_grid post_item_grid_4bigpost_format_gallery">
                                                    <div class="post_featured img">
                                                        <img alt="Ocean Cargo Roundtable" src="images/news/480x400.png">
                                                        <div class="hover_wrap">
                                                            <div class="hover_content">
                                                                <a class="hover icon-resize-ful" href="images/news/1800x1125.png" title="Ocean Cargo Roundtable"></a>
                                                                <div class="post_info">
                                                                    <h4 class="post_title">
                                                                        <a href="#">Ocean Cargo Roundtable</a>
                                                                    </h4>
                                                                    <span class="info">
                                                                        <a class="post_tag_link" href="#">Change</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="sc_button sc_button_square sc_button_bg_custom">
                                            <span>View all projects</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="footer_wrap bg_tint_dark footer_style_dark widget_area">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-3 col-sm-6 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="images/icon/157x54.png" alt="">
                                        <span class="logo_info"></span>
                                    </a>
                                </div>
                                <div class="logo_descr">Thousands of projects have made us a leader in construction area. We stand behind our promise to deliver timely and quality service</div>
                                <div class="sc_socials sc_socials_size_small">
                                    <div class="sc_socials_item">
                                        <a href="https://twitter.com/Theme_REX" target="_blank" class="social_icons social_twitter icons">
                                            <span class="icon-twitter"></span>
                                            <span class="sc_socials_hover icon-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="https://www.facebook.com/themerex" target="_blank" class="social_icons social_facebook icons">
                                            <span class="icon-facebook"></span>
                                            <span class="sc_socials_hover icon-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="https://plus.google.com/102189073109602153696" target="_blank" class="social_icons social_gplus icons">
                                            <span class="icon-gplus"></span>
                                            <span class="sc_socials_hover icon-gplus"></span>
                                        </a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_linkedin icons">
                                            <span class="icon-linkedin"></span>
                                            <span class="sc_socials_hover icon-linkedin"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="col-md-3 col-sm-6 widget widget_text">
                            <h5 class="widget_title">Contact Info</h5>
                            <div class="textwidget">
                                <div class="sc_section">
                                    <a href="#">
                                        <b>Global Logistics</b>
                                    </a>
                                    <br>
                                    378 Main Street London England
                                </div>
                                <div class="sc_section">
                                    tel.: +1 (44) 123-45-67
                                    <br>e-mail: info@globallogistics.net
                                </div>
                            </div>
                        </aside>
                        <aside class="col-md-3 col-sm-6 widget widget_recent_reviews">
                            <h5 class="widget_title">Recent reviews</h5>
                            <div class="recent_reviews">
                                <article class="post_item with_thumb first">
                                    <div class="post_thumb">
                                        <img alt="Justify Your Private Fleet" src="images/news/90x70.png">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="#">Justify Your Private Fleet</a>
                                        </h6>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="53.5">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg">
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                        </div>
                                                        <div class="reviews_stars_hover">
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews_value">53.5</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post_info"></div>
                                    </div>
                                </article>
                                <article class="post_item with_thumb">
                                    <div class="post_thumb">
                                        <img alt="Import Fundamentals" src="images/news/90x70.png">
                                    </div>
                                    <div class="post_content">
                                        <h6 class="post_title">
                                            <a href="#">Import Fundamentals</a>
                                        </h6>
                                        <div class="post_rating reviews_summary blog_reviews">
                                            <div class="criteria_summary criteria_row">
                                                <div class="reviews_stars reviews_style_stars" data-mark="46.5">
                                                    <div class="reviews_stars_wrap">
                                                        <div class="reviews_stars_bg">
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                        </div>
                                                        <div class="reviews_stars_hover">
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                            <span class="reviews_star"></span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews_value">46.5</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post_info"></div>
                                    </div>
                                </article>
                            </div>
                        </aside>
                        <aside class="col-md-3 col-sm-6 widget widget_nav_menu">
                            <h5 class="widget_title">Categories</h5>
                            <div class="menu-categories-container">
                                <ul id="menu-categories" class="menu">
                                    <li class="menu-item">
                                        <a href="gallery-classic-2-columns.html">Gallery Classic</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gallery-grid-2-columns.html">Gallery Grid</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="gallery-masonry-2-columns.html">Gallery Masonry</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="grid-alternative.html">Grid Alternative</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </footer>

            <section class="copyright_wrap fullwidth_section dark_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <p>ThemeREX © 2015 All Rights Reserved.
                                    <a href="#">Terms of Use</a>
                                    and
                                    <a href="#">Privacy Policy</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
