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
        $less->compileFile('less/4007.less', 'css/4007.css');
        ?>

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/4007.css" rel="stylesheet" type="text/css"/>
          
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/4007.js" type="text/javascript"></script>
    </head> 

    <body> 
        <?php include '../4007/4007-content.php'; ?>
    </body>
</html>