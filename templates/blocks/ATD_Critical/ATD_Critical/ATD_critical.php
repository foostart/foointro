<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tiêu đề</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module_menu.less', 'css/module_menu.css');
        $less->compileFile('less/critical-1.less', 'css/critical-1.css');
        $less->compileFile('less/critical-2.less', 'css/critical-2.css');
        $less->compileFile('less/atd_module10.less', 'css/atd_module10.css');
        $less->compileFile('less/atd_footer.less', 'css/atd_footer.css');
        $less->compileFile('less/atd_phutro.less', 'css/atd_phutro.css');
        ?>

        <!-----------------------------CSS----------------------------->
        <link href="css/module_menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/critical-1.css" rel="stylesheet" type="text/css"/>
        <link href="css/critical-2.css" rel="stylesheet" type="text/css"/>
        <link href="css/atd_module10.css" rel="stylesheet" type="text/css"/>
        <link href="css/atd_footer.css" rel="stylesheet" type="text/css"/>
        <link href="css/atd_phutro.css" rel="stylesheet" type="text/css"/>

        <!-----------------------------JQUERY----------------------------->
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/module_menu.js" type="text/javascript"></script>
        <script src="js/bootstrap-offcanvas-navigation.js" type="text/javascript"></script>
        <script src="js/critical-1.js" type="text/javascript"></script>
        <script src="js/scrolltotop.js" type="text/javascript"></script>

    </head>

    <body>
        <?php include '../ATD_Critical/module_menu-content.php'; ?>
        <?php include '../ATD_Critical/critical-1-content.php'; ?>
        <?php include '../ATD_Critical/critical-2-content.php'; ?>
        <?php include '../ATD_Critical/atd_module10-content.php'; ?>
        <?php include '../ATD_Critical/atd_footer-content.php'; ?>
        <?php include '../ATD_Critical/atd_phutro-content.php'; ?>
    </body>
</html>