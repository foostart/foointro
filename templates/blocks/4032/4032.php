<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4032</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4032.less', 'css/4032.css');
        ?> 
        <link href="css/4032.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include '../4032/4032-content.php'; ?>
    </body>
</html>
