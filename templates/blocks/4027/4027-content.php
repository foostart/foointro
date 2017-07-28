<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4027">
<div class="type-3">
            <div class="container">
                <h3 class="most">Most Recent</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img class="img-responsive" src="image/tm-tcm-na-800x600-icom-cms-video_166139_0.jpg">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light"></span>
                                        <h4>
                                            <a href="#">iCOM CMS Demo: Revolutionize How You Manage Edge Computing Spaces</a>
                                        </h4>
                                        <p class="hidden-xs">The iCOM thermal management system with mobile app is the first IoT product to support edge computing and cloud computing in small critical spaces. It gives contractors, service providers and IT managers visibility into the small IT spaces they maintain, improving alarm response and management through real-time notification and troubleshooting workflows via mobile devices, the web and building management systems (BMS). </p>
                                        <span class="date">July 11, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img class="img-responsive" src="image/800x600-criticaladvantagewebcastimage-v3.jpg">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light">Data Center / Colocation / Hosting</span>
                                        <h4>
                                            <a href="#">Webinar: Overcoming the Biggest Data Center Challenges When Working with Colocation</a>
                                        </h4>
                                        <p class="hidden-xs">In this webinar, we’ll discuss the biggest consideration and challenges to overcome when it comes to working with a colocation partner. We’ll also dive into current data center and digitization trends and where a good colocation partner can help you navigate today’s digital ecosystem. </p>
                                        <span class="date">June 10, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img  class="img-responsive" src="image/800x60-164479-heatwave_164512_0.jpg">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light">Data Center / Colocation / Hosting</span>
                                        <h4>
                                            <a href="#">The Power Outage Reporter</a>
                                        </h4>
                                        <p class="hidden-xs">Follow our tracking report and each month you’ll learn about  many of the electrical problems from around North America. </p>
                                        <span class="date">July 05, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img class="img-responsive" src="image/800x600-smartrow-dcr-time-lapse_164466_0.png">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light">Data Center / Colocation / Hosting</span>
                                        <h4>
                                            <a href="#">SmartRow DCR Time-Lapse Assembly</a></h4>
                                        <p class="hidden-xs">The SmartRow™ DCR is a self-contained, modular datacenter designed to simplify IT deployments in indoor spaces.
                                        </p>
                                        <span class="date">June 29, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img src="image/800x600-wecandothat_globalservices_164092_0.jpg" class="img-responsive">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light">Data Center / Colocation / Hosting</span>
                                        <h4>
                                            <a href="#">We Can Do That – Global Services</a>
                                        </h4>
                                        <p class="hidden-xs">Demand for consistent, efficient service has no borders, and neither does Vertiv. With a site presence in more than 50 countries working through more than 3,000 field engineers, we can be your partner for complete service and planning solutions everywhere you operate.</p>
                                        <span class="date">June 29, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img  class="img-responsive" src="image/800x600-31834_104139_0.jpg">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light"></span>
                                        <h4>
                                            <a href="#">Services</a></h4>
                                        <p class="hidden-xs">Companies are always looking for ways to ensure availability and minimize costs. This video shows how Vertiv is positioned to help manage your resources, making the most of your people and your processes while optimizing the performance of your facilities anywhere in the world.
                                        </p>
                                        <span class="date">June 28, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img  class="img-responsive" src="image/auckland-transport-800x600_145553_0.jpg">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light"></span>
                                        <h4>
                                            <a href="#">Commercial and Industrial</a>
                                        </h4>
                                        <p class="hidden-xs">There’s no room for downtime in your world. This video shows how Vertiv delivers unmatched reliability with industrial power solutions able to withstand the harshest conditions. Our proactive service and maintenance programs led by knowledgeable service teams help ensure all systems are working on good and bad days.</p>
                                        <span class="date">June 28, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="panel panel-default same-height-target" style="height: 525.75px;">
                            <div class="row">
                                <a class="col-xs-4 col-sm-12" href="#">
                                    <img class="img-responsive" src="image/800x600-162466_162470_0.jpg">
                                </a>
                                <div class="col-xs-8 col-sm-12">
                                    <div class="panel-body">
                                        <span class="topic-name subtitle light"></span>
                                        <h4>
                                            <a href="#">Communication Networks</a></h4>
                                        <p class="hidden-xs">Managing data and telecommunication platforms is a challenging and important task. This video offers ways Vertiv can help make the job easier. From thermal and management solutions, reliable service support to rapid deployment capabilities, we’ll have you up and running in no time. </p>
                                        <span class="date">June 28, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more">
                    <button id="show8More" class="button fluid">Show More</button>
                </div>
            </div>
        </div>
    </div>