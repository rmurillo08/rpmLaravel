<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    @include('includes.head')
</head>
<body
    class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_solid top_panel_show top_panel_above user_menu_show sidebar_hide fixed_top_menu">
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
                        <h4 id='yellow'><b>PACKAGE DETAILS</b></h4>
                        <div class="col-sm-12" id='backgroundColor'>
                            <div class="col-sm-6">
                                <p></p>
                                <p> <b>Invoice Date:</b> TBA <br>
                                    <b>Invoice Number:</b> <br>
                                    <b>Description:</b>
                                </p>
                            </div>
                            <div class="col-sm-6 textRight">
                                <p></p>
                                <p> <b>AWB#</b><br>
                                    <span id="blue">TBA</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 topPadding">
                        <div class="col-sm-6">
                            <table class="tg1 mine">
                                <thead>
                                <tr>
                                    <th class="mine">Charges</th>
                                    <th class="mine">Amount(TT$)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="mine">
                                    <td class="tinyBorder"></td>
                                    <td class="tinyBorder"></td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr class="mine">
                                    <td class="tinyBorder"><b>Total</b></td>
                                    <td class="tinyBorder"><b></b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table class="tg1 mine">
                                <thead>
                                <tr>
                                    <th class="tg1-cly1">Date</th>
                                    <th class="tg1-cly1">Status</th>
                                    <th class="tg1-cly1">Location</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="mine">
                                    <td class="tinyBorder"></td>
                                    <td class="tinyBorder"></td>
                                    <td class="tinyBorder"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p> We currently do not have any unpaid invoices under your account.</p>
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
