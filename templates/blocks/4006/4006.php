<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        
      
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/4006.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4006.less', 'css/4006.css');
        ?> 
       
        
      
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/js-4006.js" type="text/javascript"></script>
      
    </head>
    <body>


            <?php 
            include '../4006/4006-content.php'
            ; ?>
           
    </body>
</html>
