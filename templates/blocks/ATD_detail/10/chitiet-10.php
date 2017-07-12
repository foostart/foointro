<!DOCTYPE html>

<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/chitiet-10.css" rel="stylesheet" type="text/css" />
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/chitiet-10.less', 'css/chitiet-10.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        
</head>

<body>
    <?php include '../10/chitiet-module10-content.php'; ?>
</body>

</html>