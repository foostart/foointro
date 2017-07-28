<!DOCTYPE html>

<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/4037.css" rel="stylesheet" type="text/css" />
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4037.less', 'css/4037.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        
</head>

<body>
    <?php include '../4037/4037-content.php'; ?>
</body>

</html>