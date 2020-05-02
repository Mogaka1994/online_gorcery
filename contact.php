<?php
ob_start();
session_start();
ini_set('display_errors', 'On');
error_reporting(E_ERROR);
require_once 'config/connect.php';
include 'inc/header.php';
include 'inc/nav.php';
if(isset($_POST) & !empty($_POST)){
    $subj      = filter_var($_POST['subj'], FILTER_SANITIZE_STRING);
    $msg       = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
    $phone     = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $mail      = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);

    $usql = "INSERT INTO mail(Mail,Message,Subject,Phone) VALUES ('$mail','$msg','$subj','$phone')";
    $ures = mysqli_query($connection, $usql) or die(mysqli_error($connection));
    if($ures){
     $response ="<div class ='alert-info'>Thanks for Contacting us</div>";
    }
}

?>


<!-- SHOP CONTENT -->
<section id="content">
    <div class="content-blog">
        <div class="row">
            <div class="col-md-5 col-xs-7 col-md-offset-6 logo">
                <a href="index.php"><img src="admin/inc/logo.png" class="img-responsive" alt="Easy Foods"/></a>
            </div>
        </div>
        <form method="post" action="contact.php">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="billing-details">
                            <h3 class="uppercase">Leave a message:<?php echo $response;?></h3>
                            <div class="space30"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Subject:</label>
                                    <input name="subj" id="subj" class="form-control" placeholder="Subject"  type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Mail:</label>
                                    <input name="mail" id="mail" class="form-control" placeholder="Email" type="text">
                                </div>
                            </div>
                            <div class="clearfix space20"></div>
                            <label>Phone </label>
                            <input name="phone" class="form-control" id="phone" placeholder="Phone Number" type="text">
                            <label>Message: </label>
                            <textarea name="msg" id="msg" class="form-control" placeholder="Message" cols="8" rows="8"></textarea>
                            <div class="clearfix space20"></div>
                            <input type="submit" class="btn btn-info" value="Submit">
                        </div>
                    </div>

                </div>

            </div>
        </form>
    </div>
</section>

<?php include 'inc/footer.php' ?>
