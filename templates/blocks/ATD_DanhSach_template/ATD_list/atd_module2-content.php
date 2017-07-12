<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

   <div class="list-2">
    <div class="sort">
        <h>SORT BY</h>
        <select>
            <option>Featured</option>
            <option>Most Recent</option>
        </select>
        <p>10 of 19 Results</p>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="filter2">
                    <h>FILTER</h>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="sort2">
                    <h>SORT BY</h>
                </div>
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="filter">
                <h>FILTER</h>
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <div class="left">
                <a>Clear All Filters</a>
                <br>
                <h>PRODUCT TYPE</h>
            </div>
            <select class="option">
                <option>Power Transfer Switches</option>
                <option>Load Banks</option>
                <option>Power Transfer Switches</option>
                <option>Load Banks</option>
                <option>Power Transfer Switches</option>
                <option>Load Banks</option>
                <option>Power Transfer Switches</option>
                <option>Load Banks</option>
                <option>Power Transfer Switches</option>
                <option>Load Banks</option>
                <option>Power Transfer Switches</option>
                <option>Load Banks</option>
            </select>
            <div class="click">
                <h3>Application  <span class="cong1">+</span><span class="tru1">-</span></h3>
                <div class="click-text1">
                    <p class="check1">
                        <input class="box1">Small Computer Room (10)</p>
                    <p class="check2">
                        <input class="box2">Small Computer Room (10)</p>
                    <p class="check3">
                        <input class="box3">Small Computer Room (10)</p>
                    <p class="check4">
                        <input class="box4">Small Computer Room (10)</p>
                    <p class="check5">
                        <input class="box5">Small Computer Room (10)</p>
                    <p class="check6">
                        <input class="box6">Small Computer Room (10)</p>
                    <p class="check7">
                        <input class="box7">Small Computer Room (10)</p>
                    <p class="check8">
                        <input class="box8">Small Computer Room (10)</p>

                </div>
            </div>
            <div class="click">
                <h3>Application  <span class="cong2">+</span><span class="tru2">-</span></h3>
                <div class="click-text2">
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                </div>
            </div>
            <div class="click">
                <h3>Application  <span class="cong3">+</span><span class="tru3">-</span></h3>
                <div class="click-text3">
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                </div>
            </div>
            <div class="click">
                <h3>Application  <span class="cong4">+</span><span class="tru4">-</span></h3>
                <div class="click-text4">
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                    <p class="check">
                        <input>Small Computer Room (10)</p>
                </div>
            </div>
            <div class="apply">
                <h>APPLY</h>

            </div>
            <div class="clear">
                <h>CLEAR ALL</h>
            </div>
        </div>

        <div class="col-md-9">

            <div class="right">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="image/trinergy-cube-vertiv-hero2.png" alt="" />
                        <h5>FEATURED</h5>
                    </div>
                    <div class="col-xs-6">
                        <h4>Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h4>
                        <p>Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as...</p>
                    </div>
                    <div class="col-xs-3">
                        <a class="quick">QUICK LINKS</a>
                        <a>Product Brochure</a>
                        <a>Sales Contact</a>
                        <a>Support Contact</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="image/trinergy-cube-vertiv-hero2.png" alt="" />
                        <h5>FEATURED</h5>
                    </div>
                    <div class="col-xs-6">
                        <h4>Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h4>
                        <p>Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as...</p>
                    </div>
                    <div class="col-xs-3">
                        <a class="quick">QUICK LINKS</a>
                        <a>Product Brochure</a>
                        <a>Sales Contact</a>
                        <a>Support Contact</a>
                    </div>
                </div>
            </div>
            <div class="right-background">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="image/trinergy-cube-vertiv-hero2.png" alt="" />
                        <h5>FEATURED</h5>
                    </div>
                    <div class="col-xs-6">
                        <h4>Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h4>
                        <p>Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as...</p>
                    </div>
                    <div class="col-xs-3">
                        <a class="quick">QUICK LINKS</a>
                        <a>Product Brochure</a>
                        <a>Sales Contact</a>
                        <a>Support Contact</a>
                    </div>
                </div>
            </div>
            <div class="right-background">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="image/trinergy-cube-vertiv-hero2.png" alt="" />
                        <h5>FEATURED</h5>
                    </div>
                    <div class="col-xs-6">
                        <h4>Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h4>
                        <p>Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as...</p>
                    </div>
                    <div class="col-xs-3">
                        <a class="quick">QUICK LINKS</a>
                        <a>Product Brochure</a>
                        <a>Sales Contact</a>
                        <a>Support Contact</a>
                    </div>
                </div>
            </div>
            <div class="right-background-click">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="image/trinergy-cube-vertiv-hero2.png" alt="" />
                        <h5>FEATURED</h5>
                    </div>
                    <div class="col-xs-6">
                        <h4>Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h4>
                        <p>Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as...</p>
                    </div>
                    <div class="col-xs-3">
                        <a class="quick">QUICK LINKS</a>
                        <a>Product Brochure</a>
                        <a>Sales Contact</a>
                        <a>Support Contact</a>
                    </div>
                </div>
            </div>
            <div class="right-background-click">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="image/trinergy-cube-vertiv-hero2.png" alt="" />
                        <h5>FEATURED</h5>
                    </div>
                    <div class="col-xs-6">
                        <h4>Liebert Trinergy Cube UPS, 150 kW-3.4 MW</h4>
                        <p>Liebert® Trinergy™ Cube is the new generation of Trinergy UPS delivering unsurpassed performance to enterprise data centers. Ready to evolve with growing business demands, it offers the highest level of power availability as well as...</p>
                    </div>
                    <div class="col-xs-3">
                        <a class="quick">QUICK LINKS</a>
                        <a>Product Brochure</a>
                        <a>Sales Contact</a>
                        <a>Support Contact</a>
                    </div>
                </div>
            </div>
            <div class="more">
                <h>SHOW MORE</h>
            </div>
            <div class="sort">
                <p>10 of 19 Results</p>
            </div>
        </div>
    </div>

    <div class="sortby">
        <div class="sort3">
            <h>SORT BY</h>
            <i class="fa fa-times" aria-hidden="true"></i>

        </div>
        <p class="check1">FEATURED
            <input class="box1">
        </p>
        <p class="check2">MOST RECENT
            <input class="box2">
        </p>
    </div>
</div>