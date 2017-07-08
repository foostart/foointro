<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<body>
    <div class="ATD_menu">
        <nav class="navbar navbar-default">
            <div class="mega-container text-center">
                <div class="navbar-header">
                    <span><button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" aria-expanded="false" aria-controls="navbar">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </button></span>
                    <a href="" class="navbar-brand"><img class="img-responsive" src="image/logo_compact.png" alt="" /></a>
                    <button class="btn btn-default pull-right visible-xs search-trigger" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <ul class="nav navbar-nav navbar-center">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products</a>
                        <div class="dropdown-menu same-height-component" role="menu">
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">THERMAL MANAGEMENT</a></li>
                                <li><a href="#">Enclosure Cooling</a></li>
                                <li><a href="#">Room Cooling</a></li>
                                <li><a href="#">In-Row Cooling</a></li>
                                <li><a href="#">Rack Cooling</a></li>
                                <li><a href="#">Evaporative Free Cooling</a></li>
                                <li><a href="#">Free Cooling Chillers</a></li>
                                <li><a href="#">Thermal Control and Monitoring</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">FACILITIES, ENCLOSURES AND RACKS</a></li>
                                <li><a href="#">Integrated Solutions</a></li>
                                <li><a href="#">Racks and Containment</a></li>
                                <li><a href="#">Outdoor Enclosures</a></li>
                                <li class="menu-header"><a href="#">MONITORING, CONTROL AND MANAGEMENT</a></li>
                                <li><a href="#">IT Management</a></li>
                                <li><a href="#">Software</a></li>
                                <li><a href="#">Monitoring</a></li>
                            </ul>
                            <ul class="same-height-target cor col-sm-3">
                                <li class="menu-header"><a href="#">BRANDS</a></li>
                                <li><a href="#">ASCO®)</a></li>
                                <li><a href="#">Chloride®</a></li>
                                <li><a href="#">Liebert®</a></li>
                                <li><a href="#">NetSure™</a></li>
                                <li><a href="#">Trellis™</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services</a>
                        <div class="dropdown-menu same-height-component" role="menu">
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">THERMAL MANAGEMENT</a></li>
                                <li><a href="#">Enclosure Cooling</a></li>
                                <li><a href="#">Room Cooling</a></li>
                                <li><a href="#">In-Row Cooling</a></li>
                                <li><a href="#">Rack Cooling</a></li>
                                <li><a href="#">MAINTENANCE SERVICES</a></li>
                                <li><a href="#">Emergency Response</a></li>
                                <li><a href="#">Preventive Maintenance</a></li>
                                <li><a href="#">Preventive Maintenance for Industrial Applications</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Support</a>
                        <div class="dropdown-menu same-height-component mot" role="menu">
                            <ul class="same-height-target col-sm-12">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Insights</a>
                        <div class="dropdown-menu same-height-component" role="menu">
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About</a>
                        <div class="dropdown-menu same-height-component" role="menu">
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                            <ul class="same-height-target col-sm-3">
                                <li class="menu-header"><a href="#">CRITICAL POWER</a></li>
                                <li><a href="#">Uninterruptible Power Supplies (UPS)</a></li>
                                <li><a href="#">DC Power Systems</a></li>
                                <li><a href="#">Power Distribution</a></li>
                                <li><a href="#">Industrial AC and DC Systems</a></li>
                                <li><a href="#">Power Transfer Switches</a></li>
                                <li><a href="#">Paralleling Switch Gear</a></li>
                                <li><a href="#">Load Banks</a></li>
                                <li><a href="#">Surge Protective Devices</a></li>
                                <li><a href="#">Fire Pump Controllers</a></li>
                                <li><a href="#">Power Control and Monitoring</a></li>
                                <li><a href="#">Wind Power</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="search-field-mask">
                    <div class="search-tablet-trigger">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <from class="navbar-form navbar-right search-field ng-pristine ng-valid">
                        <div class="input-group add-on">
                            <div class="group-selector is-active">
                                <div class="input-group-btn dropdown is-active">
                                    <button class="ng-binding dropdown-toggle">
                                        All<span class="caret"></span>
                                    </button>
                                </div>
                            </div>
                            <input type="text" id="searchInput" class="form-control search-input ng-pristine ng-valid ng-empty ng-touched" autocomplete="off">
                        </div>

                    </from>
                </div>

            </div>
        </nav>

    </div>

    <div class="banner1">
        <div class="mod_custom_7">
            <div class="sld-hover">
                <div id="owl-demo">

                    <div class="item">
                        <div class="slide-content">
                            <span class="subject" style="color: #FFFFFF !important;">
            RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
        </span>
                            <p class="hero-title" style="color: #FFFFFF !important;">
                                Evaluating the impact of disruption
                            </p>
                            <a href="#" target="_parent" class="button primary" tabindex="0">
            Read the report
        </a>
                        </div>
                        <img src="image/h1.jpg" alt="The Last of us">
                    </div>

                    <div class="item">
                        <div class="slide-content">
                            <span class="subject" style="color: #FFFFFF !important;">
            RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
        </span>
                            <p class="hero-title" style="color: #FFFFFF !important;">
                                Evaluating the impact of disruption
                            </p>
                            <a href="#" target="_parent" class="button primary" tabindex="0">
            Read the report
        </a>
                        </div>
                        <img src="image/h2.jpg" alt="GTA V">
                    </div>

                    <div class="item">
                        <div class="slide-content">
                            <span class="subject" style="color: #FFFFFF !important;">
            RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
        </span>
                            <p class="hero-title" style="color: #FFFFFF !important;">
                                Evaluating the impact of disruption
                            </p>
                            <a href="#" target="_parent" class="button primary" tabindex="0">
            Read the report
        </a>
                        </div>
                        <img src="image/h3.jpg" alt="Mirror Edge">
                    </div>
                    <div class="item">
                        <div class="slide-content">
                            <span class="subject" style="color: #FFFFFF !important;">
            RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
        </span>
                            <p class="hero-title" style="color: #FFFFFF !important;">
                                Evaluating the impact of disruption
                            </p>
                            <a href="#" target="_parent" class="button primary" tabindex="0">
            Read the report
        </a>
                        </div>
                        <img src="image/h4.jpg" alt="Mirror Edge">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="banner2">
        <div class="mod_custom_2">
            <h3 class="text-center section-header">
            FEATURED PRODUCTS
        </h3>
            <div class="sld-hover">
                <div id="owl-demo2">

                    <div class="item">
                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="item">

                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="/en-us/products/" target="_parent" class="button primary">
                    SEE ALL PRODUCTS
                </a>
            </div>
        </div>
    </div>

    <div class="banner3">
        <div class="mod_custom_2">
            <h3 class="text-center section-header">
            FEATURED PRODUCTS
        </h3>
            <div class="sld-hover">
                <div id="owl-demo3">

                    <div class="item">
                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="item">

                        <div class="container">
                            <div class="Bannersld">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="col-sm-12 ">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h4.png" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="imagebaner">
                                                <a href="#">
                                                    <img src="image/h5.jpg" alt="" />
                                                </a>

                                            </div>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">

                                        <div class="imagebanerbig">
                                            <a href="#">
                                                <img src="image/h6.png" alt="" />
                                            </a>
                                            <div class="panel-body truncate-component">
                                                <small>Software</small>
                                                <h3><a href="#" tabindex="0">Trellis™ Enterprise Solutions</a>
                </h3>
                                                <p class="truncate-text">By providing real-time, integrated view of IT and facility assets, the Trellis DCIM solution makes it easier to collaborate,...</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 text-center">
                <a href="#" target="_parent" class="button primary">
                    SEE ALL PRODUCTS
                </a>
            </div>
        </div>
    </div>

    <div class="banner_4">

        <div class="banner_5">
            <div class="row">
                <div class="col-md-6" style="background-color: #FFFFFF">
                    <div class="top">
                        <div class="col-sm-6">
                            <img src="image/1.jpg" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <div class="text1">
                                <h4>Watch the Vertiv Video</h4>
                                <p>Our lives rely on a world where critical technologies always work. Our company video illustrates a day in the life of a doctor and her young daughter and how the technologies and services of Vertiv support the infrastructure that empowers...</p>
                                <h6>December 1, 2016</h6>
                            </div>

                        </div>
                    </div>
                    <div class="bot">
                        <img src="image/2.jpg" alt="" />
                        <div class="text2">
                            <p>THERMAL MANAGEMENT</p>
                            <h1>Cooling the Edge: Small Spaces Getting Attention</h1>
                            <h6>November 25, 2016</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="background-color: #FFFFFF">
                    <div class="bot">
                        <img src="image/3.jpg" alt="" />
                        <div class="text3">
                            <p>DATA CENTER/COLOCATION/HOSTING</p>
                            <h1>AHRI Certified - Performance as Promised</h1>
                            <h6>January 17, 2017</h6>
                        </div>
                    </div>
                    <div class="top">
                        <div class="col-sm-6">
                            <img src="image/4.jpg" alt="" />
                        </div>
                        <div class="col-sm-6">
                            <div class="text4">
                                <span>EFFICIENCY</span>
                                <h4>Making a More Efficient Data Centre (Part 2 of 2)</h4>
                                <p>In my previous article a couple of weeks ago, I covered some of the basics around where your data centre might be losing efficiency and how consolidation of your infrastructure can help to fix this. In this new article, we’re going to del...</p>
                                <h6>November 24, 2016</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="atd_footer">
            <footer class="footer-component">
                <div class="row mega-container">
                    <div class="col-xs-12 col-sm-3 col-sm-push-9">
                        <ul class="text-right list-inline social">
                            <li class="block socialbuttonblock  "><i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </li>
                            <li class="block socialbuttonblock  "><i class="fa fa-twitter" aria-hidden="true"></i>
                            </li>
                            <li class="block socialbuttonblock  "><i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            </li>
                            <li class="block socialbuttonblock  "><i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </li>
                            <li class="block socialbuttonblock  "><i class="fa fa-google-plus" aria-hidden="true"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-sm-pull-3">
                        <p>&#169;2017 Vertiv Co. All rights reserved.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-sm-pull-3">
                        <ul class="text-center list-inline">
                            <li><a href="#">Terms of Use</a></li>
                            <li class="dot">&#8226;</li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li class="dot">&#8226;</li>
                            <li><a href="#">Site Map</a></li>
                            <li class="dot">&#8226;</li>
                            <li><a data-toggle="modal" data-target="#modal-subscribe" id="subscribeFormLauncher" href="#">Subscribe</a></li>
                            <li class="dot">&#8226;</li>
                            <li><a data-toggle="modal" data-target="#modal-feedback" id="feedbackForm" href="#">Feedback</a></li>
                        </ul>
                    </div>
                </div>
            </footer>

        </div>

    </div>
    <div class="endweb"></div>
    <a href="#" class="scrollToTop"><span class="icon icon-upload"></span></a>

</body>