<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4031">
    <div class="about">
        <div class="container">
            <h3 class="text">OUR COMPANY</h3>
            <div class="editor">
                <p>
                    Protecting your critical technologies takes more than just great software and equipment. It takes a level of experience that only comes from years of finding solutions when the industry needed them most. 

                    We were the first to protect mainframes with precision cooling systems. 

                    We were the first to introduce an integrated enclosure system to distributed networks.

                    We helped some of the largest names in the industry bring new capacity online faster and at a lower cost when search and social media increased demand for storage and computing. 
                </p>
            </div>
            <div class="editor">
                <p>
                    And now as challenges and demands grow, we continue to find better ways to help you strengthen your most vital applications. Formerly the Network Power business of Emerson, we’ve brought together the most trusted and experienced names in critical infrastructure. Our portfolio spans power, thermal and infrastructure management products, software and solutions, and is complemented by a network of nearly 250 service centers worldwide. It’s a combination of experience and resources that allow us to better adapt to what’s needed, anticipate what’s next and continue to find solutions in ways other companies simply can’t.
                </p>
            </div>
            <div class="row">
                <div class="same">
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">OVERVIEW</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Vision and Mission</a>
                                </li>
                                <li>
                                    <a href="#">Executives</a>
                                </li>
                                <li>
                                    <a href="#">History</a>
                                </li>
                                <li>
                                    <a href="#">Corporate Video</a>
                                </li>
                                <li>
                                    <a href="#">Fact Sheet</a>
                                </li>
                                <li>
                                    <a href="#">Connect With Us</a>
                                </li>
                                <li>
                                    <a href="#">Vertiv Tweets</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">CONTACTS</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Sales</a>
                                </li>
                                <li>
                                    <a href="#">Corporate</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">NEWSROOM</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Media Contacts</a>
                                </li>
                                <li>
                                    <a href="#">News Releases</a>
                                </li>
                                <li>
                                    <a href="#">Media Kits </a>
                                </li>
                                <li>
                                    <a href="#">Multimedia</a>
                                </li>
                                <li>
                                    <a href="#">In the News</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">PARTNER PROGRAM</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Program Overview</a>
                                </li>
                                <li>
                                    <a href="#">Find a Partner</a>
                                </li>
                                <li>
                                    <a href="#">Partner Portal</a>
                                </li>
                                <li>
                                    <a href="#">Telecoms EnergyNet Portal</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-2">
                        <div class="list">
                            <h2>
                                <a class="subtitle">CAREERS</a>
                            </h2>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Search Careers</a>
                                </li>
                                <li>
                                    <a href="#">Internship, Co-op, and MBA Programs</a>
                                </li>
                                <li>
                                    <a href="#">Diversity & Inclusion</a>
                                </li>
                                <li>
                                    <a href="#">Military & Veterans</a>
                                </li>
                                <li>
                                    <a href="#">Learning & Career Opportunities</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>