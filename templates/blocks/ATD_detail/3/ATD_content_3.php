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
        $less->compileFile('less/ATD_content_3.less', 'css/ATD_content_3.css');
        ?> 
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <link href="css/ATD_content_3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include '../3/ATD_content_3_content.php'; ?>
    </body>
</html>
