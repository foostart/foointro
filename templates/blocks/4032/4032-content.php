<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4032">
    <div class="featured">
        <div class="container">
            <h3 class="text">GET TO KNOW US BETTER</h3>
            <div class="component">
                <p>
                    Vertiv is a global leader in designing, building and servicing mission-critical infrastructure technologies for the vital applications in data centers, communication networks and commercial and industrial environments
                </p>
            </div>
        </div>
        <div class="featured-tile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 " >
                        <div class="image">
                            <img class="img-responsive" src="image/11.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 " >
                        <div class="content">
                            <h4 >
                                <a href="#">Company Facts</a>
                            </h4>
                            <p class="larger">
                                Annual sales, flagship brands, service centers, number of employees and more can be found in our company fact sheet.
                            </p>
                            <div class="text-left">
                                <a href="#" class="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
