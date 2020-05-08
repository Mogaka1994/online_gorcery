<?php
session_start();
require_once '../config/connect.php';
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    header('location: login.php');
}
?>
<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<section id="content">
    <div class="content-blog">
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM admin";
                $res = mysqli_query($connection, $sql);
                while ($r = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']; ?></td>
                        <td><?php echo $r['lastname']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><a href="editprofile.php?id=<?php echo $r['id']; ?>"><button class="btn btn-info btn-xs">Edit</button></a> | <a href="deleteProfile.php?id=<?php echo $r['id']; ?>"><button class="btn btn-danger btn-xs">Delete</button></a></a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</section>
<?php include 'inc/footer.php' ?>
