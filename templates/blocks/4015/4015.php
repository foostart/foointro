<!DOCTYPE html>
<html>
    <head>
        <title>4015</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4015.less', 'css/4015.css');
        ?>
        <link href="css/4015.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <?php include '../4015/4015-content.php';?>
    </body>
</html>