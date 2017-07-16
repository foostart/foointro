<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
   <div class="ATD_content_2" >
    <div class="menu-chitiet">
        
        <nav class="navbar" style="margin-bottom: 0;">
  
    
        <ul class="nav">
          <li class="prevacti">
            <a href="#Overview">Overview</a></li>
            <li><a href="#Specifications">Specifications</a></li>
            <li><a href="#downloads">Downloads</a></li>
             <li><a href="#Features">Features</a></li>
            <li><a href="#Benefits">Benefits</a></li>
             <li><a href="#Contacts">Contacts</a></li>
            <li><a href="#Insights">Insights</a></li>
           
        </ul>
      
   
 </nav>
    </div>
</div>