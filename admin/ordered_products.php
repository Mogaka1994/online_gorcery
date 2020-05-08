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
            <?php include "cool.php";?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Payment Mode</th>
                    <th>Location</th>
                    <th>Address</th>
                    <th>Mobile</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sqlns ="SELECT * FROM products INNER JOIN orderitems ON products.id = orderitems.pid INNER JOIN orders ON orders.id = orderitems.orderid INNER JOIN usersmeta ON usersmeta.uid=orders.uid INNER JOIN users ON users.id=usersmeta.uid";
                $res = mysqli_query($connection, $sqlns);
                while ($r = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $r['id']; ?></th>
                        <td><?php echo $r['firstname']. " " . $r['lastname']; ?></td>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $r['price']; ?></td>
                        <td><?php echo $r['pquantity']; ?></td>
                        <td><?php echo $r['totalprice']; ?></td>
                        <td><?php echo $r['paymentmode']; ?></td>
                        <td><?php echo $r['address1']; ?></td>
                        <td><?php echo $r['address2']; ?></td>
                        <td><?php echo $r['mobile']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</section>
<?php include 'inc/footer.php' ?>
