<!DOCTYPE html>

<html>

<head>
    <title>4018</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/4018.css" rel="stylesheet" type="text/css" />
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4018.less', 'css/4018.css');
        ?>

        
        
</head>

<body>
    <?php include '../4018/4018-content.php'; ?>
</body>

</html>