<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>4039</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4039.less', 'css/4039.css');
        ?>

        <link href="css/4039.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <?php include '../4039/4039-content.php'; ?>
    </body>
</html>