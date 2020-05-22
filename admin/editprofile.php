<?php
session_start();
require_once '../config/connect.php';
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    header('location: login.php');
}

if(isset($_GET) & !empty($_GET)){
    $id = $_GET['id'];
}else{
    header('location: profile.php');
}

if(isset($_POST) & !empty($_POST)){
    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass  = md5(mysqli_real_escape_string($connection, $_POST['pass']));


    $sql = "UPDATE admin SET firstname = '$fname',lastname ='$lname',email ='$email',password = '$pass' WHERE id=$id";
    file_put_contents("log.txt","$sql"."\n",FILE_APPEND);
    $res = mysqli_query($connection, $sql);
    if($res){
        $smsg = "Admin Updated";
    }else{
        $fmsg = "Failed Update Super Users";
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
                <?php
                $sql = "SELECT * FROM admin WHERE id=$id";
                $res = mysqli_query($connection, $sql);
                $r = mysqli_fetch_assoc($res);
                ?>
                <div class="form-group">
                    <label for="First Name">First Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" value="<?php echo $r['firstname'];  ?>">
                </div>
                <div class="form-group">
                    <label for="Last Name">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" value="<?php echo $r['lastname'];  ?>">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $r['email'];  ?>">
                </div>
                <div class="form-group">
                    <label for="First Name">Password</label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" value="<?php echo $r['password'];  ?>">
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
    </div>

</section>
<?php include 'inc/footer.php' ?>
