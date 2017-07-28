<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4022">
<div class="type-1">
    <div class="home">
        <span class="ome">Home</span><span class="big   ">></span><span class="sup">Support</span>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Find Support for My Products or Services</h1>
                <div class="col-sm-6">
                    <div class="support">
                        <img src="image/83x83-support-2.png" alt=""/>
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
                <div class="col-sm-6">
                    <div class="locate">
                        <img src="image/83x83-support-2.png" alt=""/>
                        <h3>CONTACT TECHNICAL SUPPORT</h3>
                        <p>Narrow the support contact search results by selecting the correct product type</p>
                        <input id="Keyword" name="Keyword" placeholder="Enter your product name, part number or keyword" type="text" value="">
                        <div class="filter">
                            <h>FILTER BY DOCUMENT TYPE</h><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>

                        <div class="submit">
                            <a href="#" class="primary">submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-text">
        <div class="container">
            <div class="row">
                <div class="x">X</div>
                <div class="col-xs-12 col-sm-4">
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-4">
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-4">
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                    <div class="list">
                        <label>
                            <input type="checkbox" class="checkbox-hidden">
                            <span class="checkbox-custom"></span>
                            <span class="checkbox-text">Diagrams Drawings</span>
                        </label>
                    </div>
                </div>
              
            
                <div class="done">
                    <a href="#" class="primary">done</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>