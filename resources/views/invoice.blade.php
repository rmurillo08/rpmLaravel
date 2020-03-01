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
							<h4 id='yellow'><b>Unpaid Invoices</b></h4>
                            @forelse($invoices AS $invoice)
                                <table class='tg1 mine'>
                                    <thead>
                                    <tr class='mine'>
                                        <th class="mine">Select</th>
                                        <th class='mine'>Airway <br> Bill #</th>
                                        <th class='mine'>Invoice Number</th>
                                        <th class='mine'>Shipper</th>
                                        <th class='mine'>Shipper’s Tracking Number</th>
                                        <th class='mine'>Description </th>
                                        <th class='mine'>Weight(LBS)</th>
                                        <th class='mine'>Value(US$)</th>
                                        <th class='mine'>Status</th>
                                        <th class='mine'>Invoice Amount(TT$)</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <!-- Default unchecked -->
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id={{$invoice['id']}} checked>
                                                        <label class="custom-control-label" for="{{$invoice['id']}}"></label>
                                                    </div>
                                                </th>
                                                <td>{{$invoice['billId']}}</td>
                                                <td>{{$invoice['invoiceNumber']}}</td>
                                                <td>{{$invoice['shipper']}}</td>
                                                <td>{{$invoice['trackingNumber']}}</td>
                                                <td>{{$invoice['description']}}</td>
                                                <td>{{$invoice['weight']}}</td>
                                                <td>{{$invoice['value']}}</td>
                                                <td>{{$invoice['status']}}</td>
                                                <td>{{$invoice['amount']}}</td>
                                            </tr>
                                        </tbody>
                                        <p>Click on the airway bill number to view breakdown of the individual charges and details</p>
                                        @empty
                                        <p> No pending invoices</p>
                                </table>
                            @endforelse
                            <h4 id='yellow'><b>INVOICE HISTORY</b></h4>
                            @forelse($invoices AS $invoice)
                                <table class='tg1 mine'>
                                    <thead>
                                    <tr>
                                        {{--                                        <th class='mine'>Select</th>--}}
                                        <th class='mine'>Airway <br> Bill #</th>
                                        <th class='mine'>Invoice Number</th>
                                        <th class='mine'>Shipper</th>
                                        <th class='mine'>Shipper’s Tracking Number</th>
                                        <th class='mine'>Description </th>
                                        <th class='mine'>Weight(LBS)</th>
                                        <th class='mine'>Value(US$)</th>
                                        <th class='mine'>Status</th>
                                        <th class='mine'>Invoice Amount(TT$)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$invoice['billId']}}</td>
                                        <td>{{$invoice['invoiceNumber']}}</td>
                                        <td>{{$invoice['shipper']}}</td>
                                        <td>{{$invoice['trackingNumber']}}</td>
                                        <td>{{$invoice['description']}}</td>
                                        <td>{{$invoice['weight']}}</td>
                                        <td>{{$invoice['value']}}</td>
                                        <td>{{$invoice['status']}}</td>
                                        <td>{{$invoice['amount']}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                @empty
                                <p> No invoices</p>
                            @endforelse
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
