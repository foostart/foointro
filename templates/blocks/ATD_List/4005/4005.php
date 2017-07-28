<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>4005</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4005.less', 'css/4005.css');
        ?>

        <link href="css/4005.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
       <?php include '../4005/4005-content.php';?>
    </body>
</html>