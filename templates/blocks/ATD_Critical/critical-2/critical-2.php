<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tiêu đề</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/critical-2.less', 'css/critical-2.css');
        ?>

        <link href="css/critical-2.css" rel="stylesheet" type="text/css"/>
    
    </head>

    <body>
       <?php include '../critical-2/critical-2-content.php';?>
    </body>
</html>