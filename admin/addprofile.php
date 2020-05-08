<?php
session_start();
require_once '../config/connect.php';
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    header('location: login.php');
}

if(isset($_POST) & !empty($_POST)){
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $pass  = mysqli_real_escape_string($connection, $_POST['pass']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);

    $sql  = "INSERT INTO admin (firstname,lastname,email,password) VALUES ('$fname','$lname','$email','$pass')";
    $res  = mysqli_query($connection, $sql);
    if($res){
        $smsg = "Admin Added Successful";
    }else{
        $fmsg = "Failed to Add Super User";
    }
}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<section id="content">
    <div class="content-blog">
        <div class="container">
            <?php include "cool.php";?>
            <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
            <form method="post">
                <fieldset>
                    <legend>ADMINS:</legend>
                    <div class="form-group">
                        <label for="First Name">First Name:</label>
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="Last Name">Last Name:</label>
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email :</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password :</label>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </fieldset>

            </form>

        </div>
    </div>

</section>
<?php include 'inc/footer.php' ?>
