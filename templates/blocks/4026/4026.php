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
        $less->compileFile('less/4026.less', 'css/4026.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="css/4026.css" rel="stylesheet" type="text/css"/>
        <script src="js/js-4026.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include '../4026/4026-content.php';?>
    </body>
</html>
