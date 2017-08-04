<!DOCTYPE html>
<html>
    <head>
        <title>4016</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4016.less', 'css/4016.css');
        ?>

        <link href="css/4016.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
    <?php include '../4016/4016-content.php'; ?>
    </body>
</html>