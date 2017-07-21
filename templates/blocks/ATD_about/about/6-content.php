<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-6">
    <div class="mosaic">
        <div class="content">LATEST INDUSTRY TRENDS, TECHNOLOGIES AND SOLUTIONS</div>
        <div class="row">
            
            <div class="col-md-6">
                <div class="top">
                    <div class="col-sm-6">
                        <img src="image/1.jpg" alt=""/>
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
                    <img src="image/2.jpg" alt=""/>
                    <div class="text2">
                        <p>THERMAL MANAGEMENT</p>
                        <h1>Cooling the Edge: Small Spaces Getting Attention</h1>
                        <h6>November 25, 2016</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bot">
                    <img src="image/3.jpg" alt=""/>
                    <div class="text3">
                        <p>DATA CENTER/COLOCATION/HOSTING</p>
                        <h1>AHRI Certified - Performance as Promised</h1>
                        <h6>January 17, 2017</h6>
                    </div>
                </div>
                <div class="top">
                    <div class="col-sm-6">
                        <img src="image/4.jpg" alt=""/>
                    </div>
                    <div class="col-sm-6">
                        <div class="text4">
                            <span>EFFICIENCY</span>
                            <h4>Making a More Efficient Data Centre (Part 2 of 2)</h4>
                            <p >In my previous article a couple of weeks ago, I covered some of the basics around where your data centre might be losing efficiency and how consolidation of your infrastructure can help to fix this. In this new article, we’re going to del...</p>
                            <h6>November 24, 2016</h6>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="text">
                <a href="#" class="button">See All Insights</a>
            </div>
    </div>
</div>
