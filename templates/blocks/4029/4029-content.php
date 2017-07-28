<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4029">
<div class="type-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 list">
                <span class="sub">
                    Recent Tweets
                    <a class="twitter" href="#">@VertivCo_HQ</a>
                </span>
                <ol>
                    <li>
                        <div class="line">
                            <div class="chim">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <img class="nho" src="image/A6w4dz2C_normal.jpg" alt=""/>

                            <span class="ver1">Vertiv Co.</span>
                            <span class="ver2">@VertivCo_AP</span>

                            <p class="test">
                                See why Smart Cities ranks #7 on the <span>#MostCritical</span> list: <span>vrtvco.com/bQzs0</span>
                            </p>
                            <img class="lon" src="image/DEqDw4WUIAEhkgp.jpg" alt=""/>
                            <div class="icon-left">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a class="a2" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <span class="chim">14 Jun</span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="line">
                            <div class="chim">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <img class="nho" src="image/A6w4dz2C_normal.jpg" alt=""/>

                            <span class="ver1">Vertiv Co.</span>
                            <span class="ver2">@VertivCo_AP</span>

                            <p class="test">
                                See why the <span>#defense</span>  industry ranks sixth on our <span>#MostCritical </span>industry list: <span>vrtvco.com/bQw4v</span>
                            </p>
                            <img class="lon" src="image/DEk6LBeXoAI6Qwi.jpg" alt=""/>
                            <div class="icon-left">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a class="a2" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <span class="chim">13 Jun</span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="line">
                            <div class="chim">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <div class="v3">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                <span>Vertiv Co. Retweeted</span>
                            </div>

                            <img class="nho" src="image/83c3ad58cb813c2de1b847d0a9fe154d_normal.jpg" alt=""/>
                            <span class="ver1">Watterson</span>
                            <span class="ver2">@WattersonPR</span>
                            <p class="test">
                                Hot studio gets 'cool' tech from <span>@VertivCo_AP</span>  SmartCabinet & Servcore -<span>arnnet.com.au/article/621443...</span> via <span>ARNnet </span><span>#datacentre</span>
                            </p>
                            <div class="cot">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="image/Kn307LAc.jpg" alt=""/>
                                    </div>
                                    <div class="col-sm-9 chu">
                                        <h2>Servcore settles on cool tech for hot studio</h2>
                                        <p>
                                            Data centre specialist, Servcore, has found a cool IT solution for a hot yoga studio in Sydney thanks to Vertiv’s SmartCabinet infrastructure.
                                        </p>
                                        <span>arnnet.com.au</span>
                                    </div>
                                </div>
                            </div>

                            <div class="icon-left">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a class="a2" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <span class="chim">5 Jun</span>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="line">
                            <div class="chim">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                            <img class="nho" src="image/A6w4dz2C_normal.jpg" alt=""/>

                            <span class="ver1">Vertiv Co.</span>
                            <span class="ver2">@VertivCo_AP</span>

                            <p class="test">
                                Read why the telecom industry ranks third among the world's <span>#MostCritical </span>industries:  <span>vrtvco.com/bQwCc</span>
                            </p>
                            <img class="lon" src="image/DEfwlsFXYAAKVSU.jpg"" alt=""/>
                            <div class="icon-left">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <a class="a2" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <span class="chim">12 Jun</span>
                            </div>

                        </div>
                    </li>
                </ol>
                <div class="generic-button">
                    <a href="#" target="_blank" class="button">Follow Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>