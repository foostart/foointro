<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/5.less', 'css/5.css');
        ?>

        <link href="css/5.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
      <?php include '../5/5-content.php'; ?>
    </body>
</html>
