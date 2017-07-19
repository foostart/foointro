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
        $less->compileFile('less/atd_services.less', 'css/atd_services.css');
        ?> 
        
        <link href="css/atd_services.css" rel="stylesheet" type="text/css"/>
        
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
       
        
        
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript">
        </script><script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-offcanvas-navigation.js" type="text/javascript"></script>
       
       
        <script src="js/scrolltotop.js" type="text/javascript"></script>
        <script src="js/module_menu.js" type="text/javascript"></script>
        <script src="js/slideshowservices.js" type="text/javascript"></script>
        <script src="js/scrolltotopconten2.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head> 

    <body > 
        <div class="backgroud">
                <?php include '../ATD_services/module_menu-content.php'; ?>
                <?php include '../ATD_services/1_content.php';?>
                <?php include '../ATD_services/services-2-content.php';?>
                <?php include '../ATD_services/services-3-content.php';?>
                <?php include '../ATD_services/4-content.php';?>
                <?php include '../ATD_services/atd_module4-content.php';?>
                <?php include '../ATD_services/atd_footer-content.php'; ?>
                <?php include '../ATD_services/atd_phutro-content.php'; ?>
       </div>
    </body>
</html>