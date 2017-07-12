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
        $less->compileFile('less/atd_list.less', 'css/atd_list.css');
        ?> 
        
        <link href="css/atd_list.css" rel="stylesheet" type="text/css"/>
        
        
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="css/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        
        
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
		 <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-offcanvas-navigation.js" type="text/javascript"></script>
       
       
        <script src="js/scrolltotop.js" type="text/javascript"></script>
        <script src="js/module_menu.js" type="text/javascript"></script>
        <script src="js/slideshowDS.js" type="text/javascript"></script>
        <script src="js/click.js" type="text/javascript"></script>
        
        
    </head> 

    <body> 
                <?php include '../ATD_list/module_menu-content.php'; ?>
                <?php include '../ATD_list/atd_module1-content.php'; ?>
                <?php include '../ATD_list/atd_module2-content.php'; ?>
                <?php include '../ATD_list/atd_module3-content.php'; ?>
                <?php include '../ATD_list/atd_module4-content.php'; ?>
                <?php include '../ATD_list/atd_footer-content.php'; ?>
                <?php include '../ATD_list/atd_phutro-content.php'; ?>
       
    </body>
</html>