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
                                <small>More about Easy Foods Grocery.</small>
                            </h3>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#description" data-toggle="tab">Customer FeedBack</a></li>
                                <li><a href="#location" data-toggle="tab">Location</a></li>
                                <li><a href="#type" data-toggle="tab">Convenience</a></li>
                                <li><a href="#facilities" data-toggle="tab">Client Satisfaction</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                                <div class="row">
                                    <h2 class="text-center">
                                        <p>Located in the heart of Nakuru, we are an online food and grocery shop that offers quality range of products at a value you can trust.</p>
                                    </h2>
                                </div>
                            </div>
                            <div class="tab-pane" id="type">
                                <div class="row">
                                    <h2 class="text-center">
                                        <p>Easy Foods values your time, convenience and lifestyle needs, we therefore deliver all our products right to your doorstep.</p>
                                    </h2>
                                </div>
                            </div>
                            <div class="tab-pane" id="facilities">
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                        <p>Client satisfaction is our main priority and we assure you that our groceries are organic, fresh and of high quality. We promise you that no bruised fruit or wilted vegetable will ever fall into your shopping cart.</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <p>Count on Easy Foods as your reliable partner and together, lets make your grocery shopping easier.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text">Description Photos</h4>
                                    <div class="col-sm-6 col-sm-offset-1">
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Example</label>
                                            <p class="description">The Shopping experience is really nice.It is so awesome.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />

                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ?>
<script src="inc/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="inc/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="inc/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="inc/assets/js/gsdk-bootstrap-wizard.js"></script>
<script src="inc/assets/js/jquery.validate.min.js"></script>
