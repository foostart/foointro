<!DOCTYPE html>
<html>
    <head>
        <title>4023</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4023.less', 'css/4023.css');
        ?>

        <link href="css/4023.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php include '../4023/4023-content.php'; ?>
    </body>
</html>