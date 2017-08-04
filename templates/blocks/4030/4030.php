<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4030</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4030.less', 'css/4030.css');
        ?> 
        <link href="css/4030.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/4030-script.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include '../4030/4030-content.php';?>
    </body>
</html>
