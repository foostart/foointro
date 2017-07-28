<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4038.less', 'css/4038.css');
        ?> 
        <link href="css/4038.css" rel="stylesheet" type="text/css"/>
       
        
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
      
      
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head> 

    <body> 
        <?php include '../4038/4038-content.php'; ?>
    </body>
</html>