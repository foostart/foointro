<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

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