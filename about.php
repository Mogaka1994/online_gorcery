<?php
ob_start();
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ERROR);
    require_once 'config/connect.php';
    include 'inc/header.php';
    include 'inc/nav.php';
?>
<!-- SHOP CONTENT -->
<!--     Fonts and icons     -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
<!-- CSS Files -->
<link href="inc/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="inc/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
<link href="inc/assets/css/demo.css" rel="stylesheet" />
<section id="content">
    <div class="content-blog">
        <h2 class="text-center">Easy Foods Grocery</h2>
        <div class="col-sm-8 col-sm-offset-2">
            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="green" id="wizard">
                    <form action="" method="">
                        <div class="wizard-header">
                            <h3>
                                <small><strong>A PASSION FOR GREAT GROCERIES AND A COMMITMENT TO QUALITY</strong></small>
                            </h3>
                        </div>
                        <div class="wizard-navigation text-center">
                            <ul>
                                <li><a href="#facilities" data-toggle="tab">Our Story</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="facilities">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                </ol>

                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="admin/inc/logo.png" alt="Easy Food Grocery" style="width:100%;">
                                                        <div class="carousel-caption">
                                                            <h3>Faster and Reliable Grocery Shop.</h3>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="admin/inc/logo.png" alt="Easy Food Grocery" style="width:100%;">
                                                        <div class="carousel-caption">
                                                            <h3>Fresh Supplies.</h3>
                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <img src="admin/inc/logo.png" alt="Easy Food Grocery" style="width:100%;">
                                                        <div class="carousel-caption">
                                                            <h3>Awesome Services.</h3>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <h3 class="text-center">Mission:</h3>
                                                <p class="description">
                                                    <i>
                                                        To deliver best quality food products and alternative proteins to our customers in a more convenient way and affordable price.
                                                    </i>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="text-center">Vision:</h3>
                                                <p class="description">
                                                    <i>
                                                        Grow a customer base that will expand each year and hopefully expand to other major towns and cities in Kenya and East Africa.
                                                    </i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <h3 class="text-center">Our Story:</h3>
                                                <p class="description">
                                                    <i>
                                                        We are a family business that practices small scale farming right here in Nakuru. Thanks to our dad, we have always eaten rich healthy foods and vegetables from our farm.
                                                        EASY FOODS therefore capitalizes on the growing demand for a local convenient food store that offers organic and locally grown produce in our community.
                                                    </i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix space20"></div>
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <p>
                                            <i>
                                                Client satisfaction is our main priority and we assure you that our groceries are organic, fresh and of high quality.
                                            </i>
                                        </p>
                                    </div>
                                    <div class="col-sm-5">
                                        <p class="description">
                                            <i>
                                                Count on Easy Foods as your reliable partner and together, lets make your grocery shopping easier.
                                            </i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- wizard container -->
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ?>
<script src="inc/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="inc/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="inc/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="inc/assets/js/gsdk-bootstrap-wizard.js"></script>
<script src="inc/assets/js/jquery.validate.min.js"></script>
