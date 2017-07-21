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
        $less->compileFile('less/atd_detail.less', 'css/atd_detail.css');
        ?> 
        
        <link href="css/atd_detail.css" rel="stylesheet" type="text/css"/>
        
        
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
        <script src="js/scrolltotopconten2.js" type="text/javascript"></script>
        <script src="js/selectMenu.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        
    </head> 

    <body data-spy="scroll" data-target=".navbar" data-offset="50"> 
                <?php include '../ATD_detail/module_menu-content.php'; ?>
                 <?php include '../ATD_detail/ATD_content_1_content.php'; ?>
                <?php include '../ATD_detail/ATD_content_2_content.php'; ?>
        
                <?php include '../ATD_detail/ATD_content_3_content.php'; ?>
                <?php include '../ATD_detail/4-content.php';?>
                <?php include '../ATD_detail/ATD_content_5_content.php'; ?>
                <?php include '../ATD_detail/6-content.php'; ?>
                <?php include '../ATD_detail/7-content.php'; ?>
                <?php include '../ATD_detail/ATD_content_8_content.php'; ?>
                <?php include '../ATD_detail/chitiet-module9-content.php';?>
                <?php include '../ATD_detail/atd_module10-content.php';?>
        
        
                <?php include '../ATD_detail/atd_footer-content.php'; ?>
                <?php include '../ATD_detail/atd_phutro-content.php'; ?>
       
    </body>
</html>