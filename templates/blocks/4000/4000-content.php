
<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4000">

    <nav class="navbar navbar-default">
        <div class="hiding-header">
            <div class="text-center">
                <a href="#" class="navbar-brand-full">
                    <img src="image/logo_full.png" alt=""/>
                </a>
            </div>
        </div>

        <div class="header-bar">


            <div class="text-right action-bar">
                <div class="mega-container">

                    <a href="#">
                        <img src="image/flag-VNM.png" alt="">
                        <span>USA, English (United States)</span>
                    </a>


                    <div id="languageSwitch" class="hidden">
                        <div class="popover-body">
                            <button type="button" class="icon icon-x close"></button>

                            <h4 class="xx-smaller">Change Websites's Region &amp; Language</h4>
                            <p class="text-left subtitle smaller xx-dark">Choose your country &amp; language</p>
                            <div class="select-wrapper form-group">
                                <select class="form-control contrast" >
                                    <option >USA</option>
                                    <option >Afghanistan</option>
                                </select>
                            </div>
                            <div class="select-wrapper form-group">
                                <select class="form-control contrast"><option >English (United States)</option></select>
                            </div>
                            <button type="button" class="button primary" >Change</button>
                        </div>
                    </div>

                    <div id="notificationLanguageSwitch" class="hidden ">
                        <div class="popover-body">
                            <div class="page-location-notice">
                                <button type="button" class="icon icon-x close" ></button>

                                <h4  id="notificationTitle" class="xx-smaller" ></h4>
                                <p class="smaller" id="notificationMessage"></p>
                                <button type="button" class="button primary" >Stay on this page</button>
                                <button type="button" class="button empty primary"></button>
                            </div>
                        </div>
                    </div>


                    <a href="#" class="contact-button ">
                        <span class="fa fa-user"></span>
                        <span>Contacts</span>
                    </a>
                    <a href="#" class="contact-button">
                        <span class="fa fa-briefcase"></span>
                        <span>Careers</span>
                    </a>


                    <a href="#" class="button x-dark tight ">
                        Login
                    </a>
                </div>
            </div>


            <div class="navbar-collapse mega-nav">
                <div class="mega-container text-center">
                    <div class="navbar-header">
                        <span >
                            <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" data-target-3=".header-bar" data-target-4=".dimmer" data-target-5="body" type="button" class="navbar-toggle collapsed pull-left" >
                               
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>


                        </span>
                        <a class="navbar-brand" href="#">
                            <img class="img-responsive" alt="" src="image/logo_compact.png">
                        </a>

                        <button class="btn btn-default pull-right visible-xs search-trigger" >
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <div class="search-field-mask">

                        <search-icon-tablet class="ng-isolate-scope">
                            <div class="search-tablet-trigger"><i class="fa fa-search"></i></div>
                        </search-icon-tablet></div>
                    <div class="search-holder">

                        <search-field class="ng-isolate-scope">
                            <form   class="navbar-form navbar-right search-field " >
                                <div class="input-group add-on">

                                    <div class="group-selector ng-hide" >
                                        <div class="input-group-btn dropdown" >
                                            <button   type="button" class="ng-binding dropdown-toggle" >
                                                All
                                                <span class="caret"></span>
                                            </button>

                                        </div>

                                    </div>



                                    <input type="text" id="searchInput"  class="form-control search-input ng-pristine ng-untouched ng-valid ng-empty">

                                    <ul class="menudownn search-input-dropdown " >
                                      
                                            <li  class="ng-scope active">
                                                <a  class="ng-binding">All</a>
                                            </li>
                                            <li class="ng-scope">
                                                <a  class="ng-binding">Products</a>
                                            </li>
                                            <li  class="ng-scope">
                                                <a  class="ng-binding">Documents</a>
                                            </li>
                                            <li class="ng-scope">
                                                <a class="ng-binding">Services</a>
                                            </li>
                                            <li class="ng-scope">
                                                <a >Support</a>
                                            </li>
                                            <li  class="ng-scope">
                                         
                                                </li>
                                                <li  class="ng-scope">
                                                    <a class="ng-binding">Insights</a>
                                                </li>
                                       
                                    </ul>


                                    <div class="input-group-btn">
                                        <button class="clear-search-field ng-hide" >
                                            <span aria-hidden="true" class="icon icon-x"></span>
                                        </button>

                                        <button class="btn btn-default search-action" >
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>


                                </div>
                            </form>
                        </search-field>
                    </div>

                    <ul class="nav navbar-nav navbar-center" >


                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle " >
                                Products
                            </a>

                            <div class="dropdown-menu same-height-component" >
                                <div class="row">
                                    <div class="container">
                                        <div class="menucontent col-md-12">
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        CRITICAL POWER
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Uninterruptible Power Supplies (UPS)
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        DC Power Systems
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Power Distribution
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Industrial AC and DC Systems
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Power Transfer Switches
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Paralleling Switch Gear
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Load Banks
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Surge Protective Devices
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Fire Pump Controllers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Power Control and Monitoring
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        THERMAL MANAGEMENT
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Enclosure Cooling
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Room Cooling
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        In-Row Cooling
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Rack Cooling
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Evaporative Free Cooling
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Free Cooling Chillers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Thermal Control and Monitoring
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        FACILITIES, ENCLOSURES AND RACKS
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Integrated Solutions
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Racks and Containment
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Outdoor Enclosures
                                                    </a>
                                                </li>
                                                <li class="menu-header">
                                                    <a href="#">
                                                        MONITORING, CONTROL AND MANAGEMENT
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        IT Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Software
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Monitoring
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target contrast col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        BRANDS
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" >
                                                        ASCO®
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" >
                                                        Chloride®
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" >
                                                        Liebert®
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" >
                                                        NetSure™
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Trellis™
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>




                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle " >
                                Services
                            </a>

                            <div class="dropdown-menu same-height-component">
                                <div class="row">
                                    <div class="container">
                                        <div class="menucontent col-md-12">
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#" >
                                                        PROJECT SERVICES
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Project Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Deployment &amp; Start-Up
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Commissioning
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" >
                                                        Electrical Reliability Services (ERS)
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3">
                                                <li class="menu-header">
                                                    <a href="#">
                                                        MAINTENANCE SERVICES
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Emergency Response
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Preventive Maintenance
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Preventive Maintenance for Industrial Applications
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Remote Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Spare Parts &amp; Parts Management
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" style="height: 264px;">
                                                <li class="menu-header">
                                                    <a href="#">
                                                        PERFORMANCE OPTIMIZATION SERVICES
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Assessment &amp; Optimization Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Equipment Upgrades &amp; Replacements
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Electrical Engineering Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Safety &amp; Compliance Services
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target  col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        TRAINING
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Safety
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Product Overview
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Product Operation
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Product Maintenance
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Product Service
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle">
                                Support
                            </a>

                            <div class="dropdown-menu same-height-component" >
                                <div class="row">
                                    <div class="container">
                                        <div class="menucontent col-md-12">
                                            <ul class="same-height-target col-sm-12" >

                                                <li class="menu-header">
                                                    <a href="#"  class="cursor-default">
                                                        FIND SUPPORT
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Search for Support Information
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Contact Technical Support</a>
                                                </li>
                                                <li>
                                                    <a href="#" >Ask the Community Forum</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Equipment Training</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Software Downloads</a>
                                                </li>
                                                <li>
                                                    <a href="#">Get Warranty Information</a>
                                                </li>
                                                <li>
                                                    <a href="#">Register Your Product</a>
                                                </li>
                                                <li>
                                                    <a href="#">Report an Issue</a>
                                                </li>
                                                <li>
                                                    <a href="#">Ask a Question</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle ">
                                Insights
                            </a>

                            <div class="dropdown-menu same-height-component">
                                <div class="row">
                                    <div class="container">
                                        <div class="menucontent col-md-12">
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header"><a href="#" class="cursor-default">RESOURCES</a></li>
                                                <li>
                                                    <a href="#">Articles/Topics</a>
                                                </li>
                                                <li>
                                                    <a href="#">Tools</a>
                                                </li>
                                                <li>
                                                    <a href="#">News</a>
                                                </li>
                                                <li>
                                                    <a href="#">Webcasts</a>
                                                </li>
                                                <li>
                                                    <a href="#">Events</a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header"><a href="#" class="cursor-default">&nbsp;</a></li>
                                                <li>
                                                    <a href="#">Blog Posts</a>
                                                </li>
                                                <li>
                                                    <a href="#">Infographics</a>
                                                </li>
                                                <li>
                                                    <a href="#">Videos</a>
                                                </li>
                                                <li>
                                                    <a href="#">Case Studies</a>
                                                </li>
                                                <li>
                                                    <a href="#">White Papers</a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header"><a href="#" class="cursor-default">TOPICS</a></li>
                                                <li>
                                                    <a href="#">Availability &amp; Uptime</a>
                                                </li>
                                                <li>
                                                    <a href="#">Cloud Computing</a>
                                                </li>
                                                <li>
                                                    <a href="#">Compliance &amp; Security  </a>
                                                </li>
                                                <li>
                                                    <a href="#">DCIM &amp; IT Management</a>
                                                </li>
                                                <li>
                                                    <a href="#">Edge Computing</a>
                                                </li>
                                                <li>
                                                    <a href="#">Efficiency</a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3">
                                                <li class="menu-header"><a href="#" class="cursor-default">&nbsp;</a></li>
                                                <li>
                                                    <a href="#">Facility Optimization </a>
                                                </li>
                                                <li>
                                                    <a href="#">Internet of Things (IoT)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Monitoring</a>
                                                </li>
                                                <li>
                                                    <a href="#">Thermal Management</a>
                                                </li>
                                                <li>
                                                    <a href="#">Total Cost of Ownership</a>
                                                </li>
                                                <li>
                                                    <a href="#">Unified Infrastructure</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </li>
                        <li class="dropdown" >
                            <a href="#" class="dropdown-toggle " >
                                About
                            </a>

                            <div class="dropdown-menu same-height-component">
                                <div class="row">
                                    <div class="container">
                                        <div class="menucontent col-md-12">
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#" >
                                                        OVERVIEW
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Vision and Mission
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Executives
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        History
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Corporate Video
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Fact Sheet
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Connect With Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Vertiv Tweets
                                                    </a>
                                                </li>
                                                <li class="menu-header">
                                                    <a href="#">
                                                        CONTACTS
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Sales
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Corporate
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Support
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        NEWSROOM
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Media Contacts
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        News Releases
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Media Kits 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Multimedia
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        In the News
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Events
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        PARTNER PROGRAM
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Program Overview
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Find a Partner
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Partner Portal
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Telecoms EnergyNet Portal
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="same-height-target  col-sm-3" >
                                                <li class="menu-header">
                                                    <a href="#">
                                                        CAREERS
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        Search Careers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Internship, Co-op, and MBA Programs
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Diversity &amp; Inclusion
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Military &amp; Veterans
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Learning &amp; Career Opportunities
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>

                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
    </nav>

    <div class="dimmer" style="display: none;"></div>
    <div class="side-collapse in">

        <div class="sidebar-offcanvas mobile-nav">
            <div class="col-xs-12 sidebar-content">


                <div class="main-menu mobile-mega-menu open">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                                <ul>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li>
                                        <a href="#">Additional Details</a>
                                        <ul>
                                            <li><a href="#">Hello World</a></li>
                                            <li>
                                                <a href="#">Hello World</a>
                                                <ul>
                                                    <li><a href="#">A</a></li>
                                                    <li><a href="#">C</a></li>
                                                    <li><a href="#">B</a></li>
                                                    <li><a href="#">D</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                                <ul>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">What Ever</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Products</a></li>
                            <li>
                                <a href="#">Medical Services</a>
                                <ul>
                                    <li><a href="#">Cardiovascular</a></li>
                                    <li><a href="#">Vascular</a></li>
                                    <li><a href="#">Orthopedics</a></li>
                                    <li><a href="#">Women's Health</a></li>
                                    <li>
                                        <a href="#">Cancer</a>
                                        <ul>
                                            <li><a href="#">Corp</a></li>
                                            <li><a href="#">Inner</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                            <li><a href="#">Orthopedics</a></li>
                                            <li><a href="#">Women's Health</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                            <li><a href="#">Orthopedics</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                            <li><a href="#">Orthopedics</a></li>
                                            <li><a href="#">Women's Health</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Cardiovascular</a></li>
                                    <li><a href="#">Vascular</a></li>
                                    <li><a href="#">Orthopedics</a></li>
                                    <li><a href="#">Women's Health</a></li>
                                    <li><a href="#">Cardiovascular</a></li>
                                    <li><a href="#">Vascular</a></li>
                                    <li><a href="#">Orthopedics</a></li>
                                    <li>
                                        <a href="#">Women's Health</a>
                                        <ul>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Cardiovascular</a></li>
                                    <li><a href="#">Vascular</a></li>
                                    <li>
                                        <a href="#">What</a>
                                        <ul>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">Corp</a></li>
                                            <li><a href="#">Inner</a></li>
                                            <li><a href="#">Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular Cardiovascular </a></li>
                                            <li><a href="#">Vascular</a></li>
                                            <li><a href="#">Orthopedics</a></li>
                                            <li><a href="#">Women's Health</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                            <li><a href="#">Orthopedics</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                            <li><a href="#">Orthopedics</a></li>
                                            <li><a href="#">Women's Health</a></li>
                                            <li><a href="#">Cardiovascular</a></li>
                                            <li><a href="#">Vascular</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Orthopedics</a></li>
                                    <li><a href="#">Women's Health</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Health &amp; Wellness</a></li>
                        </ul>
                    </nav>

                    <div class="widget-region">
                        <div class="sidebar-controls">
                            <span class="subtitle normal">Choose your country &amp; language</span>
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select class="form-control" name="mobileCountries"><option value="USA" selected="selected">USA</option><option value="AFG">Afghanistan</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="ASM">American Samoa</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATG">Antigua and Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="ASC">Ascension Island</option><option value="AUS">Australia</option><option value="AUT">Austria (Österreich)</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus (Беларусь)</option><option value="BEL">Belgium (Belgique/België)</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia</option><option value="BIH">Bosnia and Herzegovina</option><option value="BWA">Botswana</option><option value="BRA">Brazil</option><option value="IOT">British Indian Ocean Territory</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon (Cameroun)</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic (République centrafricaine)</option><option value="TCD">Chad (Tchad)</option><option value="CHI">Channel Islands (Îles de la Manche)</option><option value="CHL">Chile</option><option value="CHN">China (中国)</option><option value="CXR">Christmas Island</option><option value="CCK">Cocos (Keeling) Islands</option><option value="COL">Colombia</option><option value="COM">Comoros (Union des Comores)</option><option value="COG">Congo</option><option value="COD">Congo, The Democratic Republic</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="HRV">Croatia</option><option value="CUW">Curacao</option><option value="CYP">Cyprus (Kıbrıs)</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic (República Dominicana)</option><option value="TLS">East Timor</option><option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea (Guinea Ecuatorial)</option><option value="ERI">Eritrea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FLK">Falkland Islands (Malvinas)</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option><option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option><option value="PYF">French Polynesia</option><option value="GAB">Gabon (République gabonaise)</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany (Deutschland)</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GIN">Guinea (Guinée)</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="VAT">Holy See (Vatican City State)</option><option value="HND">Honduras</option><option value="HKG">Hong Kong (香港)</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IDN">Indonesia</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="ISR">Israel</option><option value="ITA">Italy (Italia)</option><option value="CIV">Ivory Coast (Côte d'Ivoire)</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan (Қазақстан)</option><option value="KEN">Kenya</option><option value="KIR">Kiribati</option><option value="KOR">Korea (한국)</option><option value="XKX">Kosovo</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan (Кыргызстан)</option><option value="LAO">Laos</option><option value="LVA">Latvia (Латвия)</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LBY">Libya</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania (Литва)</option><option value="LUX">Luxembourg</option><option value="MAC">Macau (澳門)</option><option value="MKD">Macedonia</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MHL">Marshall Islands</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="FSM">Micronesia</option><option value="MDA">Moldova, Republic of</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique (Moçambique)</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NRU">Nauru</option><option value="NPL">Nepal</option><option value="NLD">Netherlands (Nederland)</option><option value="ANT">Netherlands Antilles</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NIU">Niue</option><option value="NFK">Norfolk Island</option><option value="MNP">Northern Mariana Islands</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PLW">Palau</option><option value="PSE">Palestinian Authority</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="PCN">Pitcairn Islands</option><option value="POL">Poland (Polska)</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Reunion</option><option value="ROU">Romania</option><option value="RUS">Russian Federation (Россия)</option><option value="RWA">Rwanda</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome and Principe (São Tomé e Príncipe)</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="SLB">Solomon Islands</option><option value="SOM">Somalia</option><option value="ZAF">South Africa</option><option value="SGS">South Georgia/South Sandwich</option><option value="ESP">Spain (España)</option><option value="LKA">Sri Lanka</option><option value="BLM">St. Barts</option><option value="SHN">St. Helena</option><option value="KNA">St. Kitts and Nevis</option><option value="LCA">St. Lucia</option><option value="MAF">St. Martin</option><option value="SPM">St. Pierre and Miquelon</option><option value="VCT">St. Vincent and the Grenadines</option><option value="SUR">Suriname</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland (Schweiz)</option><option value="TWN">Taiwan (臺灣)</option><option value="TJK">Tajikistan (Тоҷикистон)</option><option value="TZA">Tanzania, United Republic of</option><option value="THA">Thailand</option><option value="TGO">Togo</option><option value="TKL">Tokelau</option><option value="TON">Tonga</option><option value="TTO">Trinidad and Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey (Türkiye)</option><option value="TKM">Turkmenistan (Түркменистан)</option><option value="TCA">Turks and Caicos Islands</option><option value="TUV">Tuvalu</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="URY">Uruguay</option><option value="UMI">US Minor Outlying Islands</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Vietnam</option><option value="VGB">Virgin Islands (British)</option><option value="VIR">Virgin Islands (U.S.)</option><option value="WLF">Wallis and Futuna Islands</option><option value="ESH">Western Sahara</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="select-wrapper">
                                    <select class="form-control" name="mobileLanguages"><option value="en">English (United States)</option></select>
                                </div>
                            </div>
                            <button type="button" class="button primary block text-center change-language-button" >Change</button>

                            <a href="#"  class="button light block text-center ">
                                Contacts
                            </a>

                            <a href="#"  class="button light block text-center">
                                Careers
                            </a>

                            <a id="loginLinkHeader" href="#" class="button primary block text-center login-btn">Login</a>



                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>

    <div class="container side-collapse-container">

    </div>
</div>
<script src="js/js.js" type="text/javascript"></script>



