<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="mega-container">
    <div class="module-4008">
        <div class="container">
            <div class="row">
                <div class="text">
                    <p>You’re in the business of handling unexpected challenges. And so are our power transfer switches. Engineered and tested in concert with the equipment they support, our power transfer switches deliver ultra-fast and reliable switching between redundant UPS units and between the UPS system and backup power source.</p>
                </div>
            </div>
            <div class="row">
                <div class="media-767">
                    <div class="col-xs-6">
                        <div class="media-filter">
                            <h3>FILTER</h3>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="media-sort-by">
                            <h3>SORT BY</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-sort-by">
                    <div class="product-sort-by-1">
                        <h3>SORT BY<span class="end-sort-by">X</span></h3>
                    </div>
                    <div class="product-sort-by-2">
                        <a> FEATURED<span class="check-1"></span></a>
                    </div>
                    <div class="product-sort-by-3">
                        <a> MOST RECENT<span class="check-2"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="sort">
                    <span>SORT BY</span>
                    <select>
                        <option>Featured</option>
                        <option>Most Recent</option>
                    </select>
                    <div class="results">
                        <p>10 of 20 Results</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="product">
                        <a class="clear">Clear All Filters</a>
                        <div class="product-filter">
                            <h3>FILTER<span class="end-filter">X</span></h3>
                        </div>
                        <div class="product-1">
                            <h3>PRODUCT TYPE</h3>
                            <select>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                                <option>Power Transfer Switches</option>
                            </select>
                        </div>
                        <div class="product-2">
                            <h3>Product Type<span class="plus">+</span><span class="minus">-</span></h3>
                            <div class="contact">
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                            </div>
                        </div>
                        <div class="product-2">
                            <h3>Product Type<span class="plus">+</span><span class="minus">-</span></h3>
                            <div class="contact">
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                            </div>
                        </div>
                        <div class="product-2">
                            <h3>Product Type<span class="plus">+</span><span class="minus">-</span></h3>
                            <div class="contact">
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                            </div>
                        </div>
                        <div class="product-2">
                            <h3>Product Type<span class="plus">+</span><span class="minus">-</span></h3>
                            <div class="contact">
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                            </div>
                        </div>
                        <div class="product-2">
                            <h3>Product Type<span class="plus">+</span><span class="minus">-</span></h3>
                            <div class="contact">
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                                <label class="check">
                                    <input type="checkbox" class="checkbox-hidden">
                                    <span class="checkbox-custom"></span>
                                    <span class="checkbox-text">Automatic Transfer Switch (11)</span>
                                </label>
                            </div>
                        </div>
                        <div class="product-3">
                            <h2>QUICK LINKS</h2>
                            <h2 class="asco">ASCO Power - Digital Binder</h2>
                        </div>
                        <div class="product-4">
                            <div class="product-apply">
                                <h3>APPLY</h3>
                            </div>
                            <div class="product-clear-all">
                                <h3>CLEAR ALL</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="type">
                        <div class="type-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="featured-1">
                                            <img src="image/4008-1.png" alt="" />
                                            <span>FEATURED</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-9">
                                        <div class="featured-2">
                                            <h2>ASCO 7000 SERIES Power Transfer Switch</h2>
                                            <p>When power fails, businesses suffer. For some organizations, a permanent generator is too costly. Instead, a permanent means for quickly connecting a portable or temporary generator can make economic sense. Installing a manual transfer...</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="featured-3">
                                            <div class="quick"><span>QUICK LINKS</span></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"> <a>Product Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="featured-1">
                                            <img src="image/4008-1.png" alt="" />
                                            <span>FEATURED</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-9">
                                        <div class="featured-2">
                                            <h2>ASCO 7000 SERIES Power Transfer Switch</h2>
                                            <p>When power fails, businesses suffer. For some organizations, a permanent generator is too costly. Instead, a permanent means for quickly connecting a portable or temporary generator can make economic sense. Installing a manual transfer...</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="featured-3">
                                            <div class="quick"><span>QUICK LINKS</span></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"> <a>Product Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="featured-1">
                                            <img src="image/4008-1.png" alt="" />
                                            <span>FEATURED</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-9">
                                        <div class="featured-2">
                                            <h2>ASCO 7000 SERIES Power Transfer Switch</h2>
                                            <p>When power fails, businesses suffer. For some organizations, a permanent generator is too costly. Instead, a permanent means for quickly connecting a portable or temporary generator can make economic sense. Installing a manual transfer...</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="featured-3">
                                            <div class="quick"><span>QUICK LINKS</span></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"> <a>Product Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="featured-1">
                                            <img src="image/4008-1.png" alt="" />
                                            <span>FEATURED</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-9">
                                        <div class="featured-2">
                                            <h2>ASCO 7000 SERIES Power Transfer Switch</h2>
                                            <p>When power fails, businesses suffer. For some organizations, a permanent generator is too costly. Instead, a permanent means for quickly connecting a portable or temporary generator can make economic sense. Installing a manual transfer...</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="featured-3">
                                            <div class="quick"><span>QUICK LINKS</span></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"> <a>Product Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="featured-1">
                                            <img src="image/4008-1.png" alt="" />
                                            <span>FEATURED</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-9">
                                        <div class="featured-2">
                                            <h2>ASCO 7000 SERIES Power Transfer Switch</h2>
                                            <p>When power fails, businesses suffer. For some organizations, a permanent generator is too costly. Instead, a permanent means for quickly connecting a portable or temporary generator can make economic sense. Installing a manual transfer...</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="featured-3">
                                            <div class="quick"><span>QUICK LINKS</span></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"> <a>Product Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="type-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="featured-1">
                                            <img src="image/4008-1.png" alt="" />
                                            <span>FEATURED</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-9">

                                        <div class="featured-2">
                                            <h2>ASCO 7000 SERIES Power Transfer Switch</h2>
                                            <p>When power fails, businesses suffer. For some organizations, a permanent generator is too costly. Instead, a permanent means for quickly connecting a portable or temporary generator can make economic sense. Installing a manual transfer...</p>
                                        </div>

                                    </div>
                                    <div class="col-xs-3">
                                        <div class="featured-3">
                                            <div class="quick"><span>QUICK LINKS</span></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"><a>Product Brochure</a></div>
                                            <div class="quick"> <a>Product Brochure</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show-more">
                            <h3>SHOW MORE</h3>
                        </div>
                        <div class="results">
                            <p>10 of 20 Results</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>