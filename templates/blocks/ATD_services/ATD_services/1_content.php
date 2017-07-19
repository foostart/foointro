<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

 <div class="type-1">
            <div class="mega-container">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="breadcrumb x-smaller">
                            <li><a href="#" class="dark">Home</a></li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-bar">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <i class="fa fa-print" aria-hidden="true"></i>
                            <span>Subscribe</span>
                        </div>  
                    </div>
                </div>
            </div>
        <div class="test">
         
          
           
            <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="fa fa-share-square-o"> </button>
         
        
        <div class="side-collapse in">
            <span class="item">
               
                <a href="#"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href=""> <i class="fa fa-envelope" aria-hidden="true"></i></a>
                
            </span>
        </div>
        <div class="container side-collapse-container out">
      
    </div>
        </div>
        </div>