<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
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
                        <h4 id='yellow'><b>My Packages</b></h4>
                        <h4><b>Packages in transit</b></h4>
                        @foreach($transits AS $invoice)
                            <table id = 'checkBox' class='tg1 mine'>
                                <thead>
                                <tr class='mine'>
                                    <th class='mine'>Airway <br> Bill #</th>
                                    <th class='mine'>Shipper</th>
                                    <th class='mine'>Shipper’s Tracking Number</th>
                                    <th class='mine'>Description </th>
                                    <th class='mine'>Weight(LBS)</th>
                                    <th class='mine'>Value(US$)</th>
                                    <th class='mine'>Status</th>
                                    <th class='mine'>Estimated Arrival</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <!-- Default unchecked -->
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id={{$invoice['id']}} >
                                            <label class="custom-control-label" for="{{$invoice['id']}}"></label>
                                        </div>
                                    </th>
                                    {{--                                                <td><input type="checkbox" name="checkbox[]" value={{$invoice['id']}}/></td>--}}
                                    <td class="tinyBorder">{{$invoice['billId']}}</td>
                                    <td class="tinyBorder">{{$invoice['shipper']}}</td>
                                    <td class="tinyBorder">{{$invoice['trackingNumber']}}</td>
                                    <td class="tinyBorder">{{$invoice['description']}}</td>
                                    <td class="tinyBorder">{{$invoice['weight']}}</td>
                                    <td class="tinyBorder">{{$invoice['value']}}</td>
                                    <td class="tinyBorder">{{$invoice['status']}}</td>
                                    <td class="tinyBorder">{{$invoice['arrival']}}</td>
                                </tr>
                                </tbody>
                                <p>Click on the airway bill number to view breakdown of the individual charges and details</p>
                            </table>
                        @endforeach
                        @if(empty($transits))
                            No Packages in transit
                        @endif
                        <h4><b>Packages ready for collection</b></h4>
                        @foreach($collects AS $invoice)
                            <table class='tg1 mine'>
                                <thead>
                                <tr>
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
                                    <td class="tinyBorder">{{$invoice['billId']}}</td>
                                    <td class="tinyBorder">{{$invoice['shipper']}}</td>
                                    <td class="tinyBorder">{{$invoice['trackingNumber']}}</td>
                                    <td class="tinyBorder">{{$invoice['description']}}</td>
                                    <td class="tinyBorder">{{$invoice['weight']}}</td>
                                    <td class="tinyBorder">{{$invoice['value']}}</td>
                                    <td class="tinyBorder">{{$invoice['status']}}</td>
                                    <td class="tinyBorder">{{$invoice['arrival']}}</td>
                                </tr>
                                </tbody>
                            </table>
                        @endforeach
                        @if(empty($collects))
                            <p> No Packages to collect</p>
                        @endif
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
<script>
    $(document).ready(function() {
        $('#checkBox').DataTable( {
            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            select: {
                style:    'os',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        } );

        var events = $('#events');
        var table = $('#example').DataTable( {
            dom: 'Bfrtip',
            select: true,
            buttons: [
                {
                    text: 'Get selected data',
                    action: function () {
                        var count = table.rows( { selected: true } ).count();

                        events.prepend( '<div>'+count+' row(s) selected</div>' );
                    }
                }
            ]
        } );
    } );
</script>
<script type="text/javascript" src="js/vendor/jquery.js"></script>
<script type="text/javascript" src="js/vendor/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
{{--    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>--}}

<!--<script type="text/javascript" src="custom_tools/js/front.customizer.js"></script>
    <script type="text/javascript" src="custom_tools/js/skin.customizer.js"></script>-->

<script type="text/javascript" src="js/_packed.js"></script>
<script type="text/javascript" src="js/shortcodes.min.js"></script>
<script type="text/javascript" src="js/_main.js"></script>
</body>
</html>
