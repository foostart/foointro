<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TODO supply a title</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/ATD_content_8.less', 'css/ATD_content_8.css');
        ?> 
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="css/ATD_content_8.css" rel="stylesheet" type="text/css"/>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include '../ATD_content_8/ATD_content_8_content.php'; ?>
    </body>
</html>
