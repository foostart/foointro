<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4028">
<div class="type-4">
    <div class="wrapper-left">
        <div class="container">
            <h3 class="related-title">Featured</h3>
            <div class="sld-hover">
                <div class="row">
                    <div class="margin-tow">
                        <div id="owl-demo">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/800x600-90311979-iot-resources_129945_0.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Leveraging The Internet of Things in the Data Center and Edge</a>
                                            </h4>
                                            <p class="larger">With projections of up to 50 billion Internet of Things (IoT) connected devices by 2020, many industries are finding ways to leverage IoT. Data Centers and Edge computing sites are uniquely positioned to leverage IoT and improve visibility, efficiency, availability and scalability, for a more profitable business.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/cp-ups-800x600-49976-keys-to-powering-todays-critical-network-edge-infographic_114001_0.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Keys to Powering Today's Critical Network Edge</a>
                                            </h4>
                                            <p class="larger">The IT landscape continues to change. Trends are driving more and more computing to the "edge of the network". Professionals today are asking what this means to their infrastructure power systems. </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/800x600-103317_129061_0.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Data Center 2025</a>
                                            </h4>
                                            <p class="larger">The only certainty in computing is that change is coming.What will that mean for the data center of the future? Bigger? Or smaller? Faster? Better? Sure, but how? </p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/get-off-your-soapbox--the-marketing-trends-that-challenge-it.gif" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Tech In Marketing - A Dream for the CMO but a Nightmare for the CIO and IT?</a>
                                            </h4>
                                            <p class="larger">Marketing and IT should be intimate friends, often they’re barely fleeting acquaintances. As a marketer, working in a business enabling the digital applications of the digital world, I see both sides, and they are now, and are becoming more intertwined and interdependent.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="item">
                                <div class="row">

                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/app-first--simplicity-for-customers-complexity-for-it-test.gif" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >App-first: Simplicity for Customers, Complexity for IT</a>
                                            </h4>
                                            <p class="larger">Mobile devices have fast become the most important screen for consumers, to the point that firefighters are weighing in on our digital addictions.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/vr.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Virtual Reality Needs Real Infrastructure.Are IT Professionals Prepared?</a>
                                            </h4>
                                            <p class="larger">I must confess that I was not immune to the Pokemon Go craze. Like many others, last summer I observed people hunting Squirtles and Bulbasaurs. I also witnessed the first world frustrations of people getting frustrated because the game would not load when they were sure there must be a Pikachu close to hand.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/800x600autonomous_vehicles.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >Autonomous Cars: The Unfolding Impact for IT Professionals</a>
                                            </h4>
                                            <p class="larger">Years later and countless hours spent trawling up motorways and crawling around cities, that dream had been firmly wiped from my mind. Yet in the near future, it looks like becoming a reality for the next learner generation.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/vertivmonthlycontent_criticalinfrastructurev2.gif" alt="" />
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <h4>
                                                <a href="#" >How Does "Mission-Critical" Translate In the Digital Economy?</a>
                                            </h4>
                                            <p class="larger">I vaguely remember when I first came across the concept of the data center. In fact, it was the discovery of a seemingly obscure and futuristic sounding thing called a ‘mainframe’.</p>
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

</div>
    </div>