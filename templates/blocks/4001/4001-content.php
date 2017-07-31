<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4001">


   
    <div class="sld-hover">
        <div id="owl-demo">

            <div class="item">
                <div class="slide-content">
                    <span class="subject" >
                        RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
                    </span>
                    <p class="hero-title" >
                        Evaluating the impact of disruption
                    </p>
                    <a href="#"  class="button primary" >
                        Read the report
                    </a>
                </div>
                <img class="img-responsive" src="image/h1.jpg" alt="">
            </div>

            <div class="item">
                <div class="slide-content">
                    <span class="subject" >
                        RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
                    </span>
                    <p class="hero-title" >
                        Evaluating the impact of disruption
                    </p>
                    <a href="#" class="button  primary">
                        Read the report
                    </a>
                </div>
                <img class="img-responsive" src="image/h2.jpg" alt="">
            </div>

            <div class="item">
                <div class="slide-content">
                    <span class="subject" >
                        RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
                    </span>
                    <p class="hero-title" >
                        Evaluating the impact of disruption
                    </p>
                    <a href="#" class="button primary">
                        Read the report
                    </a>
                </div>
                <img class="img-responsive" src="image/h3.jpg" alt="">
            </div>
            <div class="item">
                <div class="slide-content">
                    <span class="subject" >
                        RANKING THE WORLD'S MOST CRITICAL INDUSTRIES
                    </span>
                    <p class="hero-title" >
                        Evaluating the impact of disruption
                    </p>
                    <a href="#"  class="button primary" >
                        Read the report
                    </a>
                </div>
                <img class="img-responsive" src="image/h4.jpg" alt="">
            </div>

        </div>
    </div>





    </div>