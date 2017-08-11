<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>4040</title>

       
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4040.less', 'css/4040.css');
        ?> 
        <link href="css/4040.css" rel="stylesheet" type="text/css"/>
     
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/js-4040.js" type="text/javascript"></script>
    </head>

    <body>
        <?php include '../4040/4040-content.php'; ?>
    </body>
</html>