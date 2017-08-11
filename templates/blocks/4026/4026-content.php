<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="module-4026">
    <div class="contrast-background">
        <div class="container">
            <h1>Insights</h1>
            <span>Keeping you informed on the latest trends, technologies and solutions.</span>
            <div class="row">
                <div class="col-xs-6">
                    <button class="button primary pull-left">
                        Topics &amp; Filters
                        <span class="arrow-dropdown hidden-xs"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="col-xs-6 visible-xs">
                    <button class="button light pull-right">
                        Sort By
                    </button>
                </div>
                <div class="col-xs-6 hidden-xs">
                    <form class="form-inline pull-right">
                        <div class="form-group">
                            <label class="control-label smaller">
                                Sort By
                            </label>
                            <select class="form-control" id="sortorder" name="SortOrder"><option selected="selected" value="MostRecent">Most Recent</option>
                                <option value="Relevance">Relevance</option>
                                <option value="Alphabetical">Alphabetical</option>
                                <option value="MostViewed">Most Viewed</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-container collapse in" id="topics">
        <div class="mega-container">
            <div class="close-button-holder">
                <span class="subtitle thick xx-light visible-xs">Topics &amp; Filters</span>
                <button class="close-btn pull-right dark">
                    <span class="icon icon-x">X</span>
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-2 filter-category-holder">
                    <div class="row">
                        <div class="col-sm-9 col-md-8">
                            <span class="subtitle smaller dark hidden-xs">Filter By</span>
                            <button data-target="#filter-area" class="filter-category visible-xs subtitle dark" data-toggle="collapse">Filter By</button>
                            <span class="tru">-</span>
                            <span class="cong">+</span>
                        </div>
                        <div id="filter-area" class="collapse in filter-elements">
                            <ul class="list-unstyled col-sm-9 col-md-8">
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="BlogPost">
                                        <input class="checkbox-hidden" id="BlogPost" name="pagetype" type="checkbox" value="BlogPost">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Blog Posts</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="WhitePaper">
                                        <input class="checkbox-hidden" id="WhitePaper" name="pagetype" type="checkbox" value="WhitePaper">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">White Papers</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="CaseStudy">
                                        <input class="checkbox-hidden" id="CaseStudy" name="pagetype" type="checkbox" value="CaseStudy">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Case Studies</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Video">
                                        <input class="checkbox-hidden" id="Video" name="pagetype" type="checkbox" value="Video">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Videos</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Infographic">
                                        <input class="checkbox-hidden" id="Infographic" name="pagetype" type="checkbox" value="Infographic">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Infographics</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Event">
                                        <input class="checkbox-hidden" id="Event" name="pagetype" type="checkbox" value="Event">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Events</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Webcast">
                                        <input class="checkbox-hidden" id="Webcast" name="pagetype" type="checkbox" value="Webcast">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Webcasts</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="News">
                                        <input class="checkbox-hidden" id="News" name="pagetype" type="checkbox" value="News">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">News</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Tool">
                                        <input class="checkbox-hidden" id="Tool" name="pagetype" type="checkbox" value="Tool">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Tools</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-custom-label smaller thick" for="Article">
                                        <input class="checkbox-hidden" id="Article" name="pagetype" type="checkbox" value="Article">
                                        <span class="checkbox-custom"></span>
                                        <span class="checkbox-label-txt">Article/Topics</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 filter-category-holder">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="subtitle smaller dark hidden-xs">INDUSTRY</span>
                            <button data-target="#topic-1" class="filter-category visible-xs subtitle dark" data-toggle="collapse">INDUSTRY</button>
                            <span class="tru2">-</span>
                            <span class="cong2">+</span>
                        </div>
                        <div class="collapse in filter-elements">
                            <ul class="list-unstyled col-sm-4 col-lg-3 ">
                                <li>
                                    <a href="#" data-topic="2674" class="topic ">Banking Financial and Insurance</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2700" class="topic ">Broadcast and Entertainment</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2701" class="topic ">Construction and Engineering</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2703" class="topic ">Mining/Metals</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2704" class="topic ">Chemical/Petrochemical (excl. Oil &amp; Gas)</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2737" class="topic ">Data Center / Colocation / Hosting</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2738" class="topic ">Education</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2739" class="topic ">Fire/Alarm/Security</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="2740" class="topic ">Government</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2741" class="topic ">Healthcare</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2742" class="topic ">Manufacturing</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2743" class="topic ">Marine</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2746" class="topic ">Military, Defense, Aerospace and Missile</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2747" class="topic ">Nuclear Power</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2748" class="topic ">Oil and Gas</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2749" class="topic ">Power Generation</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="2750" class="topic ">Power/Gas Transmission and Distribution</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2751" class="topic ">Professional Services</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2752" class="topic ">Retail and Wholesale</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2753" class="topic ">Transportation</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2754" class="topic ">Telecom</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2755" class="topic ">Water Supply/Sewage Disposal</a>
                                </li>
                            </ul></div>
                    </div>
                </div>
                <div class="col-sm-5 filter-category-holder">
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="subtitle smaller dark hidden-xs">TOPICS</span>
                            <button data-target="#topic-2" class="filter-category visible-xs subtitle dark" data-toggle="collapse">TOPICS</button>
                            <span class="tru3">-</span>
                            <span class="cong3">+</span>
                        </div>
                        <div class="collapse in filter-elements">
                            <ul class="list-unstyled col-sm-4 col-lg-3 ">
                                <li>
                                    <a href="#" data-topic="2682" class="topic ">Availability &amp; Uptime</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="16008" class="topic ">Cloud Computing</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2695" class="topic ">Compliance &amp; Security  </a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2689" class="topic ">DCIM &amp; IT Management</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="34570" class="topic ">Edge Computing</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2690" class="topic ">Efficiency</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2684" class="topic ">Facility Optimization </a>
                                </li>
                                <li>
                                    <a href="#" data-topic="37042" class="topic ">Internet of Things (IoT)</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled col-sm-4 col-lg-3 col-lg-offset-1">
                                <li>
                                    <a href="#" data-topic="2693" class="topic ">Monitoring</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2698" class="topic ">Thermal Management</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="2683" class="topic ">Total Cost of Ownership</a>
                                </li>
                                <li>
                                    <a href="#" data-topic="38680" class="topic ">Vertical Solutions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-holder visible-xs">
                <button class="button primary fluid">Apply</button>
                <button class="button fluid clear">Clear All</button>
            </div>
        </div>
    </div>
    <div class="sort-container sort hidden-sm collapse in" id="sort">
        <div class="container">
            <div class="close-button-holder">
                <span class="subtitle thick xx-light visible-xs">Sort By</span>
                <button class="close-btn pull-right dark" data-toggle="collapse" data-target=".sort">
                    <span class="icon icon-x">X</span>
                </button>
                <div class="clearfix"></div>
            </div>
            <ul class="list-unstyled">
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="MostRecent" checked="">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Most Recent</span>
                    </label>
                </li>
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="Relevance">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Relevance</span>
                    </label>
                </li>
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="Alphabetical">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Alphabetical</span>
                    </label>
                </li>
                <li class="sort-category-holder">
                    <label class="checkbox-custom-label smaller thick">
                        <input class="checkbox-hidden" name="sortorder" type="radio" value="MostViewed">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-label-txt subtitle dark">Most Viewed</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper mosaic-component">
        <div class="row mega-container p-a-0">
            <div class="col-sm-6 col-xs-12 p-a-0">
                <div class="row mosaic-large">
                    <div class="col-xs-12 p-a-0">
                        <a href="#">
                            <div class="text-overlay-xs">
                                <img class="img-responsive" src="image/healthcareconnect-800x600_165341_0.jpg" alt=""/>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-8 bottom-left-aligned">
                        <span class="subtitle xx-light x-smaller">
                            Healthcare
                        </span>
                        <h2>
                            <a class="xx-light" href="#">Healthcare Connect Thailand</a>
                        </h2>
                        <span class="date x-light smaller">July 05, 2017</span>
                    </div>
                </div>        </div>
            <div class="col-sm-6 col-xs-12 p-a-0">
                <div class="row mosaic-large">
                    <div class="col-xs-12 p-a-0">
                        <a href="#">
                            <div class="text-overlay-xs">
                                <img class="img-responsive" src="image/techtalk-800x600_165347_0.jpg" alt=""/>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-8 bottom-left-aligned">
                        <span class="subtitle xx-light x-smaller">
                            DCIM &amp; IT Management
                        </span>
                        <h2>
                            <a class="xx-light" href="#">TechTalk Thailand (Government Event)</a>
                        </h2>
                        <span class="date x-light smaller">July 05, 2017</span>
                    </div>
                </div>   
            </div>
        </div>
    </div>

</div>