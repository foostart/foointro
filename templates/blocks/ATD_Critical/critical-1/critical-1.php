<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tiêu đề</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/critical-1.less', 'css/critical-1.css');
        ?>

        <link href="css/critical-1.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/critical-1.js" type="text/javascript"></script>

    </head>

    <body>
      <?php include '../critical-1/critical-1-content.php';?>
    </body>
</html>