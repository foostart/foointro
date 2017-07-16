<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="about-5">
    <div class="section-wrapper-component features">
    <div class="container">
        <div class="row">
                    <div class="col-xs-12 col-sm-push-6 col-sm-6 col-lg-push-5 col-lg-7 ">
                        


    <img class="img-responsive"src="image/about5.jpg" alt=""/>


            
                  
   

                    </div>
                                    
            <div class="col-xs-12 col-sm-pull-6 col-sm-6 col-lg-pull-7 col-lg-5" >
                        <div class="presentation-component ">
                            <div class="presentation-content">
                              
                                <h4>Award-Winning Partner Program</h4>
<p>The Vertiv Partner Program is one of the best in the industry and has been awarded for its excellence numerous times.</p>
                            </div>
                        </div>
                    </div>
            </div>
        
    </div>
    </div>
</div>