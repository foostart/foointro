<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>4026</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4026.less', 'css/4026.css');
        ?>
         <link href="css/4026.css" rel="stylesheet" type="text/css"/>
         
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/4026.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include '../4026/4026-content.php';?>
    </body>
</html>
