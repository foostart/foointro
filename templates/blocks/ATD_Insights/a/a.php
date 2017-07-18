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
        $less->compileFile('less/a.less', 'css/a.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="css/a.css" rel="stylesheet" type="text/css"/>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/scrolltotopconten2.js" type="text/javascript"></script>
        <script src="js/slideshowDS.js" type="text/javascript"></script>
        <script src="js/atd_1.js" type="text/javascript"></script>
        <script src="js/bootstrap-offcanvas-navigation.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include '../a/menu_content.php'; ?>
        <?php include '../a/1_content.php'; ?>
        <?php include '../a/2_content.php'; ?>
        <?php include '../a/3_content.php'; ?>
        <?php include '../a/4_content.php'; ?>
        <?php include '../a/5_content.php'; ?>
        <?php include '../a/footer_content.php'; ?>
    </body>
</html>
