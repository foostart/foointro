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
        $less->compileFile('less/4010.less', 'css/4010.css');
        ?> 
        <link href="css/4010.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/4010.js" type="text/javascript"></script>
    </head> 
    <body> 
        <div class="type-4010">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="breadcrumb x-smaller">
                            <li><a href="#" class="dark">Home</a></li>
                            <li><a href="#" class="dark">Products</a></li>
                            <li><a href="#" class="dark">Uninterruptible Power Supplies (UPS)</a></li>
                            <li class="active">Liebert GXT4 UPS 700VA -10,000VA</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon-bar">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <i class="fa fa-print" aria-hidden="true"></i>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="test">
                <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="fa fa-share-square-o"> </button>
                <div class="side-collapse in">
                    <span class="item">
                        <a href="#"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href=""> <i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </span>
                </div>
                <div class="container side-collapse-container out">
                </div>
            </div>
        </div>
    </body>
</html>