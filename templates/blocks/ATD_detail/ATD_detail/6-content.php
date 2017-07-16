<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div id="Features"class="type-6"> 
            <div class="news">
                <div class="container">
                    <div class="row">

                        <div class="features">
                            <h2>FEATURES</h2>
                        </div>
                        <div class="image-top">
                            <img src="image/liebert-trinergy-cube-features-infographic.png" alt=""/>
                        </div>
                        <div class="col-md-5">
                            <div class="new">
                                <h4>Availability</h4>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Event analysis, waveform capturing and harmonic spectrum analyses</span></div>
                                <div class="text"><a class="box">●</a> <span>Data logging</span></div>
                                <div class="text"><a class="box">●</a> <span>VertivTM LIFETM Services remote diagnostic and preventive monitoring embedded in the UPS</span></div>
                            </div>
                            <div class="new">
                                <h4>Capacity & Installation Flexibility</h4>
                                <div class="text"><a class="box">●</a> <span>Configurable in various layouts</span></div>
                                <div class="text"><a class="box">●</a> <span>Simplified cable routing with unlimited input / output power connection availability</span></div>
                                <div class="text"><a class="box">●</a> <span>Increased energy density</span></div>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                            </div>
                            <div class="new">
                                <h4>Availability</h4>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Event analysis, waveform capturing and harmonic spectrum analyses</span></div>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                            </div>
                            <div class="new">
                                <h4>Availability</h4>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Event analysis, waveform capturing and harmonic spectrum analyses</span></div>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                                <div class="text"><a class="box">●</a> <span>Predictive maintenance</span></div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="image-bot">
                                <img src="image/liebert-trinergy-cube-features-infographic.png" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>