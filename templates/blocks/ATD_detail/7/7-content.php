<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
       <div class="type-7"> 
            <div class="news">
                <div class="container">
                    <div class="row">
                        <div class="features">
                            <h2>BENEFITS</h2>
                        </div>
                        <div class="image-top">
                            <img src="images/liebert-trinergy-cube-benefits-infographic.png" alt=""/>
                        </div>
                        <div class="col-md-7">
                            <div class="image-bot">
                                <img src="images/liebert-trinergy-cube-benefits-infographic.png" alt=""/>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="new">
                                <h4>Uptime Enhancement</h4>
                                <div class="text"><a class="box">●</a> <span>24/7 remote diagnostics</span></div>
                                <div class="text"><a class="box">●</a> <span>Efficient data tracking</span></div>
                            </div>
                            <div class="new">
                                <h4>Flexibility</h4>
                                <div class="text"><a class="box">●</a> <span>Adapts to physical space constraints</span></div>
                                <div class="text"><a class="box">●</a> <span>Ideal for all sites: any geographical location and new or existing buildings</span></div>
                                <div class="text"><a class="box">●</a> <span>Allows more free space for IT equipment</span></div>
                            </div>
                            <div class="new">
                                <h4>Availability</h4>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Event analysis, waveform capturing and harmonic spectrum analyses</span></div>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Under the Enhanced Capital Allowance (ECA) scheme, <span class="etl">ETL listed products</span> can claim back 100% first year capital allowance. </span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>