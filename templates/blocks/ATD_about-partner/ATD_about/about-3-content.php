<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="about-3">
    <div class="section-wrapper-component features">
    <div class="container">
        <div class="row">
                    <div class="col-xs-12 col-sm-push-6 col-sm-6 col-lg-push-5 col-lg-7 ">
                        

                       
    <div class="module3">
        <div class="mod_custom_3">
          
             
                <div class="sld-hover">
                 
                    <div class="row">
                        <div id="owl-demo">

                            
                            <div class="item">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img src="image/about3.jpg" alt="" />
                                            </a>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                               <div class="item">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="imagesd">
                                            <a href="#">
                                                <img class="img-responsive"src="image/about3.jpg" alt="" />
                                            </a>
                                        </div>
                                        
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
              
         
        </div>
    </div>
  


            
                  
   

                    </div>
                                    
            <div class="col-xs-12 col-sm-pull-6 col-sm-6 col-lg-pull-7 col-lg-5" >
                <br>
                <br>
                <br>
                <br><br>
                <br>
                <br>
                <br>
           <h3 style="text-align: center">HELPING YOU SUCCEED<br>WITH THESE PARTNER BENEFITS</h3>
                    </div>
            </div>
        
    </div>
    </div>
</div>