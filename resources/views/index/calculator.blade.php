<section id='calculator' class="fullwidth_section no_padding_top_container calculator_bg1 noRepeat">
    <div class="noBottomPadding">
        <div class="row">
            <div class="col-sm-12">
                <div class="sc_section calculator">
                    <div class="sc_section_overlay">
                        <div class="sc_section_content">
                            <div class="sc_content container">
                                <div class="sc_columns">
                                    <div class="col-md-8 col-sm-7 sc_column_item"></div>
                                    <div class="col-md-4 col-sm-5 sc_column_item whiteBackground">
                                        <h3 class="sc_title sc_title_regular sc_align_left">shipping<br>
                                            calculator</h3>
                                        <div class="sc_section">
                                            <p>Fees are being calculated on the CIF value of your purchase (Cost +
                                                Insurance + Freight)</p>
                                        </div>
                                        <div class="sc_section">
                                            <form name="cp_calculatedfieldsf_pform_1" id="cp_calculatedfieldsf_pform_1"
                                                  action="#" method="post" data-evalequations="1" autocomplete="on"
                                                  novalidate="novalidate">
                                                <input type="hidden" name="form_structure_1" id="form_structure_1"
                                                       value="">
                                                <div id="fbuilder">
                                                    <div id="fieldlist_1" class="top_aligned">
                                                        <div class="pb0 pbreak">
                                                            <div class="fields">
                                                                <div class="fields">
                                                                    <div class="fields">
                                                                        <div class="dfield">
                                                                            <input name="fieldname2_1"
                                                                                   class="field number large"
                                                                                   type="text" value=""
                                                                                   placeholder='Destination'>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fields">
                                                                        <div class="dfield">
                                                                            <input name="category"
                                                                                   class="field number large"
                                                                                   type="text" value=""
                                                                                   placeholder='Item Category'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="fields">
                                                                    <div class="fields column2">
                                                                        <div class="dfield">
                                                                            <input name="value"
                                                                                   class="field number large"
                                                                                   type="text" value=""
                                                                                   placeholder='Total Value $ USD'>
                                                                        </div>
                                                                    </div>
                                                                    <div class="fields column2">
                                                                        <div class="dfield">
                                                                            <input name="weight"
                                                                                   class="field number large"
                                                                                   type="text" value=""
                                                                                   placeholder='Weight (Lbs)'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h6>ESTIMATED SHIPPING FEE</h6>
                                                                <div class="fields">
                                                                    <div class="fields radio_label_top">
                                                                        <fieldset>
                                                                            <label> <input type="checkbox"
                                                                                           name="sameAddress" value=""
                                                                                           id="freight"> Freight
                                                                                $0.0</label>
                                                                            <label> <input type="checkbox"
                                                                                           name="sameAddress" value=""
                                                                                           id="insurance"> Insurance
                                                                                $0.00</label>
                                                                            <label> <input type="checkbox"
                                                                                           name="sameAddress" value=""
                                                                                           id="duty"> Duty $0.00</label>
                                                                            <label> <input type="checkbox"
                                                                                           name="sameAddress" value=""
                                                                                           id="vat"> VAT $0.00</label>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                                <div class="fields ">
                                                                    <div class="fields result">
                                                                        <label>The ﬁels above show in USD
                                                                            currency</label>
                                                                        <div class="dfield fields column2">
                                                                            <input name="usdTotal" class="field large"
                                                                                   type="text" value="1" id="usdTotal"
                                                                                   placeholder='$ USD'>
                                                                        </div>
                                                                        <div class="dfield fields column2">
                                                                            <input name="ttdTotal" class="field large"
                                                                                   type="text" value="27" id="ttdTotal"
                                                                                   placeholder='$ TTD'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    </div>
</section>
{{--<script type="text/javascript">--}}
{{--    let freight = 10;--}}
{{--    $(document).ready(function () {--}}
{{--        $("#freight").click(function () {--}}
{{--            if ($(this).prop("checked") === true) {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() * 10);--}}
{{--            } else {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() / 10);--}}
{{--            }--}}
{{--            $('#usdTotal').trigger('change');--}}
{{--        });--}}
{{--        $('#usdTotal').change(function () {--}}
{{--            $("#ttdTotal").val($('#usdTotal').val() * 27);--}}
{{--        });--}}


{{--        $("#insurance").click(function () {--}}
{{--            if ($(this).prop("checked") === true) {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() * 20);--}}
{{--            } else {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() / 20);--}}
{{--            }--}}
{{--            $('#usdTotal').trigger('change');--}}
{{--        });--}}
{{--        $('#usdTotal').change(function () {--}}
{{--            $("#ttdTotal").val($('#usdTotal').val() * 27);--}}
{{--        });--}}


{{--        $("#duty").click(function () {--}}
{{--            if ($(this).prop("checked") === true) {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() * 30);--}}
{{--            } else {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() / 30);--}}
{{--            }--}}
{{--            $('#usdTotal').trigger('change');--}}
{{--        });--}}
{{--        $('#usdTotal').change(function () {--}}
{{--            $("#ttdTotal").val($('#usdTotal').val() * 27);--}}
{{--        });--}}


{{--        $("#vat").click(function () {--}}
{{--            if ($(this).prop("checked") === true) {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() * 40);--}}
{{--            } else {--}}
{{--                $("#usdTotal").val($('#usdTotal').val() / 40);--}}
{{--            }--}}
{{--            $('#usdTotal').trigger('change');--}}
{{--        });--}}
{{--        $('#usdTotal').change(function () {--}}
{{--            $("#ttdTotal").val($('#usdTotal').val() * 27);--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
