<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/atd_about.less', 'css/atd_about.css');
        ?> 
        
        <link href="css/atd_about.css" rel="stylesheet" type="text/css"/>
        
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        
        
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
		 <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-offcanvas-navigation.js" type="text/javascript"></script>
       
       
        <script src="js/scrolltotop.js" type="text/javascript"></script>
        <script src="js/module_menu.js" type="text/javascript"></script>
        <script src="js/slideshowAbout.js" type="text/javascript"></script>
        
    </head> 

    <body> 
                <?php include '../ATD_about/module_menu-content.php'; ?>
                <?php include '../ATD_about/atd_module1-content.php';?>
                <?php include '../ATD_about/about-1-content.php';?>
                <?php include '../ATD_about/about-2-content.php';?>
                <?php include '../ATD_about/about-3-content.php';?>
                <?php include '../ATD_about/about-4-content.php';?>
                <?php include '../ATD_about/about-5-content.php';?>
                 <?php include '../ATD_about/about-6-content.php';?>
                <?php include '../ATD_about/atd_footer-content.php'; ?>
                <?php include '../ATD_about/atd_phutro-content.php'; ?>
       
    </body>
</html>