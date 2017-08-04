<!DOCTYPE html>
<html>
    <head>
        <title>4012</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4012.less', 'css/4012.css');
        ?> 
        <link href="css/4012.css" rel="stylesheet" type="text/css"/>
     
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
       
    </head> 

    <body> 
        <?php include '../4012/4012-content.php'; ?>
    </body>
</html>