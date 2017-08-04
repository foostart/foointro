<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>4038</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4038.less', 'css/4038.css');
        ?> 
         <link href="css/4038.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include '../4038/4038-content.php'; ?>
    </body>
</html>
