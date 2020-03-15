<div class="menu_user_wrap">
    <div class="container">
        <div class="menu_user_area menu_user_right menu_user_nav_area">
            <ul id="menu_user" class="menu_user_nav">
                <li class="menu-item">
                    <a href="contacts">Contact Us</a>
                </li>
                <li class="login_wrap">
                    <a href="account">
                        <span class="icon-profile"></span>
                        My Account
                    </a>
                </li>
                <li class="login_wrap">
                    <a href="faqs">
                        <span class="icon-profile"></span>
                        FAQ'S
                    </a>
                </li>
                <li class="menu-item">
                    <a href="logOut">Log Out</a>
                </li>
            </ul>
        </div>
        <div class="menu_user_area menu_user_left menu_user_contact_area">Call Us Now: </div>
    </div>
</div>
<div>
    <div class="col-sm-9" id='blue'>
        ID. RPM{{$accountId ?? ''}}
    </div>
</div>
<div class="menu_main_wrap logo_left menu_show col-sm-12">
    <div class="container">
        <div class="logo">
            <a href="home">
                <img src="images/icon/157x54.png" alt="">
                <span class="logo_info"></span>
            </a>
        </div>
        <div class="menu_main">
            <nav class="menu_main_nav_area">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item {{request()->segment(count(request()->segments())) === 'home' ? 'current-menu-item' : '' }}">
                        <a href="home" class="sf-with-ul">Home</a>
                    </li>
                    <li class="menu-item  {{request()->segment(count(request()->segments())) === 'account' ? 'current-menu-item' : '' }}">
                        <a href="account">MY Account</a>
                    </li>
                    <li class="menu-item {{request()->segment(count(request()->segments())) === 'packages' ? 'current-menu-item' : '' }}">
                        <a href="packages" class="sf-with-ul">My Packages</a>
                    </li>
                    <li class="menu-item {{request()->segment(count(request()->segments())) === 'invoice' ? 'current-menu-item' : '' }}">
                        <a href="invoice" class="resources">Invoices</a>
                    </li>
                    <li class="menu-item {{request()->segment(count(request()->segments())) === 'prealert' ? 'current-menu-item' : '' }}">
                        <a href="prealert">Prealert</a>
                    </li>
                    <li class="menu-item {{request()->segment(count(request()->segments())) === 'checkOut' ? 'current-menu-item' : '' }}">
                        <a href="checkOut">Check Out</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
