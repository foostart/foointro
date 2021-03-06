
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
  <div class="module-4006">
        <nav class="navbar navbar-default">



            <div class="header-bar">
                <div class="navbar-collapse mega-nav" style="background: #262626;">
                    <div class="mega-container text-center">
                        <div class="content-one">

                            <div class="wsmain">

                                <nav class="wsmenu clearfix">
                                    <ul class="mobile-sub wsmenu-list">

                                        <li><a href="#"><i class="fa fa-sign-in"></i>Tài khoản của tôi<span class="arrow"></span></a>
                                            <div class="megamenu halfdiv03">
                                                <h3 class="title">Đang nhập</h3>
                                                <form name="contact_name" class="menu_form">
                                                    <input type="text" placeholder="User Name">
                                                    <input type="password" placeholder="Password">
                                                    <input type="button" value="Reset">
                                                    <input type="submit" value="Login">
                                                </form>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-paper-plane"></i>Liên hệ chúng tôi<span class="arrow"></span></a>
                                            <div class="megamenu halfdiv">
                                                <h3 class="title">Liên hệ chúng tôi</h3>
                                                <a href="https://www.google.com/maps/place/816+Tr%C6%B0%E1%BB%9Dng+Sa,+ph%C6%B0%E1%BB%9Dng+14,+Qu%E1%BA%ADn+3,+H%E1%BB%93+Ch%C3%AD+Minh/data=!4m2!3m1!1s0x31752ed5ad3abbf1:0x7199e3d82c55f5a4?sa=X&ved=0ahUKEwjFusSW197VAhXBTLwKHb-PAMEQ8gEIIzAA">
                                                        <img src="image/4000.png" alt=""/>
                                                    </a>
                                                <form name="contact_name" class="menu_form">
                                                    <input type="text" placeholder="Name">
                                                    <input type="text" placeholder="Email">
                                                    <textarea placeholder="Your message..."></textarea>
                                                    <input type="button" value="Reset">
                                                    <input type="submit" value="Send">
                                                </form>
                                                <div class="cl"></div>
                                            </div>
                                        </li>
                                        <li class="carticon"> <a href="#"><i class="fa fa-shopping-basket" ></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li>

                                    </ul>
                                </nav>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="navbar-collapse mega-nav">
                    <div class="mega-container text-center">
                        <div class="tontent-two">

                            <div class="wsmenucontainer clearfix">
                                <div class="overlapblackbg"></div>
                                <div class="wsmobileheader clearfix">
                                    <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
                                    <a href="#" class="smallogo">
                                        <img src="image/atdc.png" alt="" width=87px/></a>
                                    <a class="callusicon" href="tel:123456789"><span class="fa fa-phone"></span></a>
                                </div>

                                <div class="header">

                                    <!--Main Menu HTML Code-->
                                    <div class="wsmain">
                                        <div class="smllogo">
                                            <a href="#">
                                                <img class="img-responsive" src="image/atdc.png" alt="" width=48%/>
                                            </a>
                                        </div>
                                        <div class="rightmenu">
                                            <form class="topmenusearch">
                                                <input placeholder="Search...">
                                                <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
                                            </form>
                                        </div>

                                        <nav class="wsmenu clearfix">
                                            <ul class="mobile-sub wsmenu-list">

                                                   <li><a href="http://localhost/foointro/templates/blocks/Product-catalog/Product-catalog.php"><i class="fa fa-align-justify"></i>Sản Phẩm <span class="arrow"></span></a>
                                                    <div class="megamenu clearfix">
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">CRITICAL POWER</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>Uninterruptible Power Supplies (UPS)</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>DC Power Systems</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>Power Distribution</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Industrial AC and DC Systems</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>Power Transfer Switches</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Paralleling Switch Gear</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Load Banks</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Surge Protective Devices</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Fire Pump Controllers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Control and Monitoring</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Wind Power</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="http://localhost/foointro/templates/blocks/List/List.php"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="http://localhost/foointro/templates/blocks/Support/Support.php"><i class="fa fa-align-justify"></i> Dịch vụ<span class="arrow"></span></a>
                                                    <ul class="wsmenu-submenu">
                                                        <li class="title"><a href="#"><i class="fa fa-arrow-circle-right"></i>FIND SUPPORT</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Search for Support Information</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Contact Technical Support</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Ask the Community Forum</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Get Equipment Training</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Get Software Downloads</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Get Warranty Information</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Register Your Product</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Report an Issue</a></li>
                                                        <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Ask a Question</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right"></i>Open Source Development</a>
                                                            <ul class="wsmenu-submenu-sub">
                                                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1</a></li>
                                                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2</a></li>
                                                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3</a></li>
                                                                <li><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4</a>
                                                                    <ul class="wsmenu-submenu-sub-sub">
                                                                        <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 1 Sub</a></li>
                                                                        <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 2 Sub</a></li>
                                                                        <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 3 Sub</a></li>
                                                                        <li class=""><a href="#"><i class="fa fa-angle-right"></i>Submenu item 4 Sub</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                                
                                                <li><a href="http://localhost/foointro/templates/blocks/Insights/Insights.php"><i class="fa fa-align-justify"></i> Khuyến mãi <span class="arrow"></span></a>
                                                    <div class="megamenu clearfix">
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">CRITICAL POWER</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Uninterruptible Power Supplies (UPS)</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>DC Power Systems</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Distribution</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Industrial AC and DC Systems</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Transfer Switches</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Paralleling Switch Gear</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Load Banks</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Surge Protective Devices</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Fire Pump Controllers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Control and Monitoring</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Wind Power</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list    ">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="http://localhost/foointro/templates/blocks/about/about.php"><i class="fa fa-align-justify"></i>Tin tức<span class="arrow"></span></a>
                                                    <div class="megamenu clearfix">
                                                        <div class="typography-text clearfix">
                                                            <div class="col-lg-6 col-sm-12">
                                                                <a href="http://localhost/foointro/templates/blocks/about-partner/about-partner.php"><h3 class="title">This is another title</h3></a>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s Ipsum more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <h3 class="title">This is another title</h3>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <h3 class="title">This is another title</h3>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia. </p>
                                                            </div>
                                                            <div class="cl"></div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <h3 class="title">Other Services</h3>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-wordpress"></i>Wordpress Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-drupal"></i>Drupal Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i>Shoping Cart Development</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <h3 class="title">More Services</h3>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-android"></i> Android App Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-apple"></i>iPhone App Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-windows"></i>Windows App Development</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <h3 class="title">Other Products</h3>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-wordpress"></i>Wordpress Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-drupal"></i>Drupal Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-joomla"></i>Joomla Development</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-sm-12">
                                                                <h3 class="title">More Services</h3>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-android"></i> Android App Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-mobile"></i>HTML5 App Development</a></li>
                                                                    <li><a href="#"><i class="fa fa-paypal"></i>Paypal Store Integration</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li><a href="http://localhost/foointro/templates/blocks/services/services.php"><i class="fa fa-align-justify"></i>Hỗ trợ <span class="arrow"></span></a>
                                                    <div class="megamenu clearfix">
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">CRITICAL POWER</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Uninterruptible Power Supplies (UPS)</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>DC Power Systems</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Distribution</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Industrial AC and DC Systems</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Transfer Switches</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Paralleling Switch Gear</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Load Banks</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Surge Protective Devices</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Fire Pump Controllers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Power Control and Monitoring</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Wind Power</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                        <ul class="col-lg-3 col-md-3 col-xs-12 link-list    ">
                                                            <li class="title"><a href="#">THERMAL MANAGEMENT</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Enclosure Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Room Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>In-Row Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Rack Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Evaporative Free Cooling</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Free Cooling Chillers</a></li>
                                                            <li><a href="#"><i class="fa fa-arrow-circle-right"></i>Thermal Control and Monitoring</a></li>
                                                        </ul>
                                                    </div>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>

                                    <!--Menu HTML Code-->

                                </div>

                            </div>
                            <!--/.navbar-collapse -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>




   

