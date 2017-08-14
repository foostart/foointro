<!DOCTYPE html>

<html>
    <head>
        <title>4041</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4041.less','css/4041.css');
        ?> 
        <link href="css/4041.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include '../4041/4041-content.php'; ?>
    </body>
</html>
