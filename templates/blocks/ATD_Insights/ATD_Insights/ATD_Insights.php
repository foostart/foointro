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
        $less->compileFile('less/module_menu.less', 'css/module_menu.css');
        $less->compileFile('less/1.less', 'css/1.css');
        $less->compileFile('less/2.less', 'css/2.css');
        $less->compileFile('less/3.less', 'css/3.css');
        $less->compileFile('less/4.less', 'css/4.css');
        $less->compileFile('less/5.less', 'css/5.css');
        $less->compileFile('less/atd_footer.less', 'css/atd_footer.css');
        $less->compileFile('less/atd_phutro.less', 'css/atd_phutro.css');
        ?>

        <link href="css/module_menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/1.css" rel="stylesheet" type="text/css"/>
        <link href="css/2.css" rel="stylesheet" type="text/css"/>
        <link href="css/3.css" rel="stylesheet" type="text/css"/>
        <link href="css/4.css" rel="stylesheet" type="text/css"/>
        <link href="css/5.css" rel="stylesheet" type="text/css"/>
        <link href="css/atd_footer.css" rel="stylesheet" type="text/css"/>
        <link href="css/atd_phutro.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-offcanvas-navigation.js" type="text/javascript"></script>
        <script src="js/module_menu.js" type="text/javascript"></script>
      
        <script src="js/3.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/scrolltotop.js" type="text/javascript"></script>
        <script src="js/scrolltotopconten2.js" type="text/javascript"></script>
        <script src="js/slideshowDS.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/script_1.js" type="text/javascript"></script>
        
    </head>
    <body>
        <?php include '../ATD_Insights/module_menu-content.php'; ?>
        <?php include '../ATD_Insights/1_content.php'; ?>
        <?php include '../ATD_Insights/2_content.php'; ?>
        <?php include '../ATD_Insights/3_content.php'; ?>
        <?php include '../ATD_Insights/4_content.php'; ?>
        <?php include '../ATD_Insights/5_content.php'; ?>
        <?php include '../ATD_Insights/atd_footer-content.php'; ?>
        <?php include '../ATD_Insights/atd_phutro-content.php'; ?>
    </body>
</html>
