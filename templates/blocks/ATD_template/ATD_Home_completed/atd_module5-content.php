<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


    


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
   