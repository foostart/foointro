<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>4027</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4027.less', 'css/4027.css');
        ?>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <link href="css/4027.css" rel="stylesheet" type="text/css"/>
        <script src="js/4027.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include '../4027/4027-content.php';?>
    </body>
</html>
