<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
        <title></title>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4000.less', 'css/4000.css');
        ?> 
        <link href="css/jquery-mobile-mega-menu-min.css" rel="stylesheet" type="text/css"/>
        <link href="css/4000.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    
        <script src="js/jquery-mobile-mega-menu.js" type="text/javascript"></script>
        <script src="js/js-4000.js" type="text/javascript"></script>
    </head>
    <body>


            <?php 
            include '../4000/4000-content.php'
            ; ?>
           
    </body>
</html>
