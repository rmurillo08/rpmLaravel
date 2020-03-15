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
                        <div class="col-sm-3" align='center'></div>
                        <div class="col-sm-6" align='left'>
                            <h4 id='yellow'><b>PRE-ALERT</b></h4>
                            <p>Use this service to alert us of your incoming shipment prior to them arriving in miami.
                                Please note Pre-Alerts should
                                be sent at least 48 hours before your item’s are delivery to us.
                            </p>
                            <form id="prealert" class="myForm1" method="post" action="{{URL:: to('prealert')}}">
                                {{csrf_field()}}
                                <div id='backgroundColor'>
                                    <p><br>
                                        <label id='label1'>Shipper/Supplier:
                                            <input type="text" name="shipper" placeholder='Amazon, Macys, eBay'
                                                   required>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Courier Company
                                            <select id="courier" name="courier" required>
                                                <option value="courierCompany" selected="selected">Choose Courier
                                                </option>
                                                <option value="fedex">Fedex</option>
                                                <option value="amazon">Amazon</option>
                                                <option value="UPS">UPS</option>
                                                <option value="DHL">DHL</option>
                                                <option value="leasership">Leasership</option>
                                                <option value="USPS">USPS</option>
                                                <option value="drop off">Drop Off</option>
                                            </select>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Tracking Number
                                            <input type="text" name="trackingNumber" placeholder='XXXXXXXXXXX' required>
                                        </label>
                                    </p>
                                    <label id='label1'>Description
                                        <select id="item" name="item">
                                            <option value="description" selected="selected">Choose a Category</option>
                                            <option value="Alarm (Motor Vehicle)">Alarm (Motor Vehicle)</option>
                                            <option value="Album"> Album</option>
                                            <option value="All Clothing"> All Clothing</option>
                                            <option value="Amplifier"> Amplifier</option>
                                            <option value="Appliances"> Appliances</option>
                                            <option value="Baby Play Pen"> Baby Play Pen</option>
                                            <option value="Bag"> Bag</option>
                                            <option value="Bed Linen"> Bed Linen</option>
                                            <option value="Bicycle"> Bicycle</option>
                                            <option value="Blank DVDs & CDSs"> Blank DVDs & CDSs</option>
                                            <option value="Bluetooth Headset"> Bluetooth Headset</option>
                                            <option value="Books"> Books</option>
                                            <option value="Calculator"> Calculator</option>
                                            <option value="Camera"> Camera</option>
                                            <option value="Camera Lens"> Camera Lens</option>
                                            <option value="Candles"> Candles</option>
                                            <option value="Car Parts"> Car Parts</option>
                                            <option value="CD ROM (Software)"> CD ROM (Software)</option>
                                            <option value="CDs"> CDs</option>
                                            <option value="CDs (music)"> CDs (music)</option>
                                            <option value="Cellular Phones and Accessories"> Cellular Phones and Accessories</option>
                                            <option value="Christmas Lights"> Christmas Lights</option>
                                            <option value="Christmas Tree (Artificial)"> Christmas Tree (Artificial)</option>
                                            <option value="Coffee"> Coffee</option>
                                            <option value="Computer Parts"> Computer Parts</option>
                                            <option value="Computer Systems"> Computer Systems</option>
                                            <option value="Computer Tower"> Computer Tower</option>
                                            <option value="Computer Tower Case"> Computer Tower Case</option>
                                            <option value="Cosmetics"> Cosmetics</option>
                                            <option value="Costume Jewelry"> Costume Jewelry</option>
                                            <option value="Digital Cameras"> Digital Cameras</option>
                                            <option value="Diving Gear"> Diving Gear</option>
                                            <option value="DVD's"> DVD's</option>
                                            <option value="Electronics"> Electronics</option>
                                            <option value="Envelopes"> Envelopes</option>
                                            <option value="Ethernet Hub"> Ethernet Hub</option>
                                            <option value="Fax and Line Modems"> Fax and Line Modems</option>
                                            <option value="Food Supplies"> Food Supplies</option>
                                            <option value="Furniture"> Furniture</option>
                                            <option value="Game Accessories"> Game Accessories</option>
                                            <option value="Hand Held Tools"> Hand Held Tools</option>
                                            <option value="Head Lights (Motor Vehicle)"> Head Lights (Motor Vehicle)</option>
                                            <option value="Headphones"> Headphones</option>
                                            <option value="Ink Cartridges"> Ink Cartridges</option>
                                            <option value="iPad (no Sim Card Slot) / Tablets PCs"> iPad (no Sim Card Slot) / Tablets PCs</option>
                                            <option value="iPad ( With Sim Card Slot)">iPad ( With Sim Card Slot)</option>
                                            <option value="iPods / Musical Storage Devices"> iPods / Musical Storage Devices</option>
                                            <option value="Jewelry"> Jewelry</option>
                                            <option value="Kitchen Accessories"> Kitchen Accessories</option>
                                            <option value="Lab Ware"> Lab Ware</option>
                                            <option value="Laptops"> Laptops</option>
                                            <option value="Medical Apparel"> Medical Apparel</option>
                                            <option value="Monitor (Computer)"> Monitor (Computer)</option>
                                            <option value="Monitor (display)"> Monitor (display)</option>
                                            <option value="Mother Boards"> Mother Boards</option>
                                            <option value="Musical Equipment"> Musical Equipment</option>
                                            <option value="Pet Food"> Pet Food</option>
                                            <option value="Plumbing"> Plumbing</option>
                                            <option value="Pressure Washer"> Pressure Washer</option>
                                            <option value="Printer (3 in one)"> Printer (3 in one)</option>
                                            <option value="Printer ( not 3 in one Machines)"> Printer ( not 3 in one Machines)</option>
                                            <option value="Printer Cartridge"> Printer Cartridge</option>
                                            <option value="Processors"> Processors</option>
                                            <option value="Projector Screen"> Projector Screen</option>
                                            <option value="Remote Control"> Remote Control</option>
                                            <option value="Router"> Router</option>
                                            <option value="Safety Helmet"> Safety Helmet</option>
                                            <option value="Shoes"> Shoes</option>
                                            <option value="Speakers"> Speakers</option>
                                            <option value="Sunglasses"> Sunglasses</option>
                                            <option value="Toys"> Toys</option>
                                            <option value="Video Game Console"> Video Game Console</option>
                                            <option value="Vitamins & Food Supplements"> Vitamins & Food Supplements</option>
                                            <option value="Watches"> Watches</option>
                                            <option value="Wheel Chair"> Wheel Chair</option>
                                            <option value="Wig - Human Hair"> Wig - Human Hair</option>
                                            <option value="Wig - Synthetic"> Wig - Synthetic</option>
                                            <option value="Other"> Other</option>
                                        </select>
                                    </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Other:
                                            <input type="text" name="otherDescription" placeholder='Enter Description'>
                                        </label>
                                    </p>
                                    <p>
                                        <label id='label1'>Cost of Shipment in US$:
                                            <input type="text" name="cost" placeholder='$0.00'>
                                            (Including Shipping)
                                        </label>
                                        <br>
                                </div>
                                <p></p>
                                *You are responsible for listing the correct and true amount of your shipment. This
                                information is given to customs.
                                <div class="col-sm-12" align='center'>
                                    <input type="image" name="submit" src="images/account/preAlert.png">
                                    <p> By pre-alerting you accept our <a href="terms">terms and conditions</a>.
                                    </p>
                                </div>
                                </p>
                            </form>
                        </div>
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
