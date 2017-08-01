<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4022">
    <div class="home">
        <span class="ome">Home</span><span class="big   ">></span><span class="sup">Support</span>
    </div>
    <div class="mega-container">
        <div class="container">
            <div class="row">
                <h1>Find Support for My Products or Services</h1>
                <div class="col-sm-6">
                    <div class="module-4022">
                        <div class="support">
                            <img src="image/4022-1.png" alt=""/>
                            <h3>CONTACT TECHNICAL SUPPORT</h3>
                            <p>Narrow the support contact search results by selecting the correct product type</p>
                            <select>
                                <option>Select Product Type</option>
                                <option>Select Product</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                                <option>Select Product Type</option>
                            </select>
                            <div class="submit">
                                <a href="#" class="primary">submit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="module-4022">
                        <div class="locate">
                            <img src="image/4022-2.png" alt=""/>
                            <h3>CONTACT TECHNICAL SUPPORT</h3>
                            <p>Search for product documents like user manuals, system application guides, data sheets, warranties, software downloads</p>
                            <input id="Keyword" name="Keyword" placeholder="Enter your product name, part number or keyword" type="text" value="">
                            <div class="filter">
                                <span>FILTER BY DOCUMENT TYPE</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                            <div class="submit">
                                <a href="#" class="primary">submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mega-2-container">
        <div class="container">
            <div class="row">
                <div class="out">X</div><br>
                <div class="col-xs-12 col-sm-4">
                    <div class="module-4022">
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="module-4022">
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="module-4022">
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                        <label class="check">
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                </div>
                <div class="submit-3">
                    <a href="#" class="primary">submit</a>
                </div>
            </div>
        </div>
    </div>
</div>