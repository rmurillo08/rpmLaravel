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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>
<body
    class="page body_style_fullscreen body_filled article_style_stretch top_panel_opacity_solid top_panel_show top_panel_above user_menu_show sidebar_hide fixed_top_menu">
<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
        <header class="top_panel_wrap">
            @include('includes.accountHeaders')
        </header>
        {{--            <div class="col-sm-9" id='blue'>--}}
        {{--                ID. RPM{{$accountId}}--}}
        {{--            </div>--}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <article class="post_item_excerpt">
                            <div class="post_content">
                                <h3 class="post_title" id='yellow'>
                                    MY ACCOUNT
                                </h3>
                                <form class="myForm1" method="post" action="{{URL:: to('account')}}"
                                      id='backgroundColor'>
                                    {{csrf_field()}}
                                    <p class='leftPadding topPadding'>Main Contact Information</p>
                                    <p>
                                        <label id='label1'>Name
                                            <input type="text" name="name" value='{{ $name }}' readonly>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Email Address
                                            <input type="text" name="email" placeholder='{{$email}}' readonly>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Identification Type
                                            <input type="text" name="identificationType"
                                                   placeholder='{{$idType}}' readonly>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Identification Number
                                            <input type="text" name="identificationNumber"
                                                   placeholder='{{$idNumber}}' readonly>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Primary Contact Number
                                            <input type="text" name="securityCode"
                                                   placeholder='{{$primaryTelephone}}' readonly>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Secondary Contact Number
                                            <input type="text" name="securityCode"
                                                   placeholder='{{$secondaryTelephone}}' readonly>
                                        </label>
                                    </p>
                                    <p class='leftPadding'>Delivery information</p>
                                    <p>
                                        <label id='label1'>Address 1
                                            <input type="text" name="primary_address" value='{{$primaryAddress}}'
                                                   required>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Address 2
                                            <input type="text" name="secondary_address"
                                                   value='{{$secondaryAddress}}'>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>City
                                            <input type="text" name="city" value='{{$city}}' required>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Country
                                            <input type="text" name="country" value='{{$country}}' required>
                                        </label>
                                    </p>
                                    <p class='bottomLeftPadding mybuttoms'>
                                        <a href='#' data-toggle="modal" data-target="#basicModal">
                                            <img src="images/account/ea.png">
                                        </a>
                                    <p/>
                                    <!-- basic modal -->
                                    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog"
                                         aria-labelledby="basicModal" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Update Information</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Any changes to the delivery address will be reflected on your
                                                        account 48 hours after the update has been made. </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-default " name="submit">Save
                                                        changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="delivery"
                                               value='delivery' {{$delivery === 1 ? 'checked' : ''}}/>
                                        <label class="custom-control-label bottomPadding">I have opt in to have all of
                                            my packages deliver to the address listed above.</label>
                                        <input type="checkbox" name="pickup"
                                               value='pickup' {{$pickup === 1 ? 'checked' : ''}}/>
                                        <label class="custom-control-label bottomPadding">I will pick up all my packages
                                            at the RPM main office. </label>
                                    </div>
                                </form>
                                <p>Other Account Settings</p>
                                <form class="myForm1" id='updateAuthUsers' method="post"
                                      action="{{URL:: to('authUser')}}">
                                    {{csrf_field()}}
                                    <div class="sc_accordion sc_accordion_style_1" data-active="0" role="tablist">
                                        <div class="sc_accordion_item sc_active">
                                            <h5 class="sc_accordion_title" role="tab" id="ui-id-1"
                                                aria-controls="ui-id-2">
                                            <span
                                                class="sc_accordion_icon sc_accordion_icon_closed icon-down-open"></span>
                                                <span
                                                    class="sc_accordion_icon sc_accordion_icon_opened icon-down-open"></span>
                                                Authorized Users
                                            </h5>
                                            <div class="sc_accordion_content" id="ui-id-2" aria-labelledby="ui-id-1"
                                                 role="tabpanel">
                                                <div>
                                                    <table id="authTable" class='mine'>
                                                        <tr row_id="$authUsers[$i]['authId']">
                                                            <th class='mine'>Authorized User</th>
                                                            <th class='mine'>Contact Number</th>
                                                            <th class='mine'>Customer ID</th>
                                                        </tr>
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <tr>
                                                                {{--                                                                <td class='mine'><input class="col-lg-offset-4" style="width: 90%" type="text" name="authUserName{{$i}}" value='{{ $authUsers[$i]['name'] ?? 'Add New User' }}'></td>--}}
                                                                {{--                                                                <td class='mine'><input style="width: 90%" type="text" name="authUserTelephone{{$i}}" value='{{ $authUsers[$i]['telephone'] ?? 'NA' }}'></td>--}}
                                                                {{--                                                                <td class='mine'><input style="width: 90%" type="text" name="authUserId{{$i}}" value='{{ $authUsers[$i]['authId'] ?? 'NA' }}' readonly></td>--}}
                                                                <td class='mine' contenteditable="true"
                                                                    data-field="name{{$i}}">
                                                                    <div class="row_data" edit_type="click"
                                                                         col_name="name"
                                                                         value="$authUsers[$i]['name']"> {{$authUsers[$i]['name'] ?? 'Add New User'}}</div>
                                                                </td>
                                                                <td class='mine' contenteditable="true"
                                                                    data-field="phone{{$i}}">{{$authUsers[$i]['telephone'] ?? 'NA'}}</td>
                                                                <td class='mine'
                                                                    data-field="id{{$i}}">{{$authUsers[$i]['authId'] ?? 'NA'}}</td>
                                                            </tr>
                                                        @endfor
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class='bottomLeftPadding biggerTopBottomPadding mybuttoms'>
                                        <a href='#' data-toggle="modal" data-target="#basicModal2">
                                            <img src="images/account/eau.png">
                                        </a>
                                    <p/>
                                    <!-- basic modal -->
                                    <div class="modal fade" id="basicModal2" tabindex="-1" role="dialog"
                                         aria-labelledby="basicModal2" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Update Information</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Any changes to the authorized users will be reflected on your
                                                        account 48 hours after the update has been made. </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button id='editForm' type="submit" class="btn btn-default "
                                                            name="submit">Save changes
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div>
                            <aside class="widget widget_nav_menu">
                                <a href='registerConfirmation'>
                                    <img src="images/account/account.png">
                                </a>
                            </aside>
                            <aside class="widget widget_recent_entries myPadding" id='myTrYellow'>
                                <h3>SHIPPING CALCULATOR</h3>
                                <p>Fees are being calculated on the CIF value of your purchase (Cost + Insurance +
                                    Freight)</p>
                                <div class="fields">
                                    <div class="fields">
                                        <div class="dfield">
                                            <input name="destination" id='almostCompleteWidth' type="text" value=""
                                                   placeholder="Destination">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="dfield">
                                            <input name="category" id='almostCompleteWidth' type="text" value=""
                                                   placeholder="Item Category">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="dfield">
                                            <input name="total" id='almostCompleteWidth' type="text" value=""
                                                   placeholder="Total Value $ USD">
                                        </div>
                                    </div>
                                    <div class="fields">
                                        <div class="dfield">
                                            <input name="weight" id='almostCompleteWidth' type="text" value=""
                                                   placeholder="Weight (Lbs) ">
                                        </div>
                                    </div>
                                </div>
                                <h6>ESTIMATED SHIPPING FEE</h6>
                                <div class="fields">
                                    <div class="fields radio_label_top">
                                        <fieldset>
                                            <p><label id='label1'> <input type="checkbox" name="freight" required
                                                                          value="freight"> Freight </label> $10.02</p>
                                            <p><label id='label1'> <input type="checkbox" name="insurance" required
                                                                          value="insurance"> Insurance </label>$2.00</p>
                                            <p><label id='label1'> <input type="checkbox" name="duty" required
                                                                          value="duty"> Duty </label>$21.00</p>
                                            <p><label id='label1'> <input type="checkbox" name="vat" required
                                                                          value="vat"> VAT </label>$17.32</p>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="fields ">
                                    <div class="fields result">
                                        <label id='label1'>The ﬁels above show in USD currency</label>
                                        <div class="dfield">
                                            <input name="usd" class="codepeoplecalculatedfield field large"
                                                   id='almostCompleteWidth' type="text" value="$ USD">
                                            <input name="ttd" class="codepeoplecalculatedfield field large"
                                                   id='almostCompleteWidth' type="text" value="$ TTD">
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

    });
    // $(document).ready(function () {
    //
    //     const table = $('#authTable').DataTable();
    //
    //     table.on('click', '.edit', function () {
    //
    //         $tr = $(this).closest('tr');
    //         if ($($tr).hasClass('child')) {
    //             $tr = $tr.prev('.parent');
    //
    //         }
    //         var data = table.row($tr).data();
    //         console.log('check data here :: ', data);
    //
    //         $('#name').val(data[1]);
    //         $('#phone').val(data[2]);
    //
    //         $('#editForm').attr('action', '/authUser/updated/' + data[0]);
    //     })
    // });

    // var row_id = $(this).closest('tr').attr('row_id');
    // var row_div = $(this);
    // var colName = row_div.attr('col_name');
    // var colVal = row_div.html();
    // var authUsers = {};
    // authUsers[colName] = colVal;
    //
    // $.extend(authUsers, {row_id:row_id});


    // var table = document.getElementById('authTable');
    //
    // for (let i = 0; i < table.rows.length; i++) {
    //     table.rows[i].oninput = function () {
    //         // rIndex = this.rowIndex;
    //         // console.log(rIndex);
    //         data[i + 'Name'] = document.getElementById("name").value.cells[0].innerHTML;
    //         data[i + 'phone'] = document.getElementById("telephone").value.cells[1].innerHTML;
    //         data[i + 'id'] = document.getElementById("id").value.cells[2].innerHTML;
    //     };
    //     console.log('thi sis the data:: ', data);
    // }
    // $('#editButton').attr('action', '/authUser/updated/' + data);

</script>
</body>
</html>
