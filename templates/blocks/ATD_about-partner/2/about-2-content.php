<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="about-2">
    <div class="frame-repon">
    <div class="row">
        
        
        
        <div class="slide-content">
        <span class="subject" style="color: #FFFFFF !important;">
            Joining the Vertiv Partner Program is easy. Simply fill out the application. Upon approval, you can start taking advantage of the numerous partner benefits.
        </span>
            <p class="hero-title" style="color: #FFFFFF !important;">
                 
        </p>
        <a href="#"class="button primary" >
            Apply Now
        </a>
		
</div>
      <img class="img-responsive"src="image/about1.jpg" alt="" style="max-height: 40rem;width: 100%" >  
    </div>
        
    </div>
</div>