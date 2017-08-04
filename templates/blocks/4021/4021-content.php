<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4021">
        <div class="container ">
            <h3 class="text-center xx-thick related-title">INDUSTRIES WE SERVICE</h3>
            <div class="component">
               <p>When you invest in our products and services, our goals become shared. We ensure continuous uptime of your critical operations so you can perform at your peak and maximize your resources. So whether you are in data center, communication, government or industrial industries, we provide solutions geared to your specific needs. It’s this customization that gives you focus and flexibility to realize your full potential.</p>
            </div>
            <div class="sld-hover">
                <div class="row">
                    <div class="margin-tow">
                    <div id="owl-demo">
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-6 col-sm-4">
                                    <div class="imagesd">
                                        <a href="#">
                                            <img src="image/h1ds.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4>
                                            <a href="#" >DC Power Systems</a>
                                        </h4>
                                        <p class="larger">Allow efficient distribution of your telecom and data center power utilizing these reliable, scalable and flexible DC power products.</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="imagesd">
                                        <a href="#">
                                            <img src="image/h2ds.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4>
                                            <a href="#" >DC Power Systems</a>
                                        </h4>
                                        <p class="larger">Allow efficient distribution of your telecom and data center power utilizing these reliable, scalable and flexible DC power products.</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="imagesd">
                                        <a href="#">
                                            <img src="image/h3ds.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4>
                                            <a href="#" >DC Power Systems</a>
                                        </h4>
                                        <p class="larger">Allow efficient distribution of your telecom and data center power utilizing these reliable, scalable and flexible DC power products.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                         <div class="item">
                            <div class="row">

                                <div class="col-xs-6 col-sm-4">
                                    <div class="imagesd">
                                        <a href="#">
                                            <img src="image/h1ds.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4>
                                            <a href="#" >DC Power Systems</a>
                                        </h4>
                                        <p class="larger">Allow efficient distribution of your telecom and data center power utilizing these reliable, scalable and flexible DC power products.</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <div class="imagesd">
                                        <a href="#">
                                            <img src="image/h2ds.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4>
                                            <a href="#" >DC Power Systems</a>
                                        </h4>
                                        <p class="larger">Allow efficient distribution of your telecom and data center power utilizing these reliable, scalable and flexible DC power products.</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-4 ">
                                    <div class="imagesd">
                                        <a href="#">
                                            <img src="image/h3ds.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <h4>
                                            <a href="#" >DC Power Systems</a>
                                        </h4>
                                        <p class="larger">Allow efficient distribution of your telecom and data center power utilizing these reliable, scalable and flexible DC power products.</p>
                                    </div>
                                </div>

                            </div>
                        </div>                   
                    </div>
                </div>
                </div>
            </div>           
        </div>
</div>