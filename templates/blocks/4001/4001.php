<!DOCTYPE html>
<html lang="en">
    <head>
        <title>4001</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4001.less', 'css/4001.css');
        ?>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/4001.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/4001-1.js" type="text/javascript"></script>

    </head>
    <body>
        <?php
        
        include '../4001/4001-content.php'; ?>
    </body>
</html>