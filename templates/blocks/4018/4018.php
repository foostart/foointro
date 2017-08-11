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
        <div class="module-4018">
            <div class="container">
                <h3 class="text-center xx-thick">Related Products</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h5 class="h9">Recommended Accessories</h5>
                        <div class="media-tile-component" >
                            <div class="row">
                                <div class="col-xs-5 col-sm-6">
                                    <a href="#">
                                        <img class="img-responsive" src="image/detail-10.png" alt=""/>
                                    </a>
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="media-content">
                                        <span class="subtitle light x-smaller">Monitoring</span><br>
                                        <a class="h7" href="#">Liebert IntelliSlot Unity Communications Cards</a>
                                        <p class="normal hidden-xs">Provides Web access, environmental sensor data, and third-party customer protocols for Vertiv equipment. The cards employ Ethernet and RS-485 networks to monitor and manage a wide range of operating parameters, alarms and notifications. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="button primary">
                        More products                </a>
                </div>
            </div>
        </div>
    </body>

</html>