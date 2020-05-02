<?php 
	ob_start();
	session_start();
    ini_set('display_errors', 'On');
    error_reporting(E_ERROR);
	require_once 'config/connect.php';
	if(!isset($_SESSION['customer']) & empty($_SESSION['customer'])){
		header('location: login.php');
	}

include 'inc/header.php'; 
include 'inc/nav.php'; 
$uid  = $_SESSION['customerid'];
$cart = $_SESSION['cart'];
?>
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>My Account</h2>
					</div>
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered">
				<thead>
					<tr>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Payment Mode</th>
						<th>Total</th>
						<th></th>
					</tr>
				</thead>
				<tbody>

				<?php
					$ordsql = "SELECT * FROM orders WHERE uid='$uid'";
					$ordres = mysqli_query($connection, $ordsql);
					while($ordr = mysqli_fetch_assoc($ordres)){
				?>
					<tr>
						<td>
							<?php echo $ordr['id']; ?>
						</td>
						<td>
							<?php echo $ordr['timestamp']; ?>
						</td>
						<td>
							<?php echo $ordr['orderstatus']; ?>			
						</td>
						<td>
							<?php echo $ordr['paymentmode']; ?>
						</td>
						<td>
							Ksh. <?php echo $ordr['totalprice']; ?>/-
						</td>
						<td>
							<a href="view-order.php?id=<?php echo $ordr['id']; ?>">View</a>
							<?php if($ordr['orderstatus'] != 'Cancelled'){?>
							| <a href="cancel-order.php?id=<?php echo $ordr['id']; ?>">Cancel</a>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>		

			<br>
			<br>
			<br>

			<div class="ma-address">
						<h3>My Addresses</h3>
						<p>The following addresses will be used on the checkout page by default.</p>

			<div class="row">
				<div class="col-md-6">
								<h4>My Address <a href="edit-address.php"><div class="btn btn-success">Edit</div></a></h4>
					<?php
						$csql = "SELECT u1.firstname, u1.lastname, u1.address1, u1.address2, u.email, u1.mobile FROM users u JOIN usersmeta u1 WHERE u.id=u1.uid AND u.id=$uid";
						$cres = mysqli_query($connection, $csql);
						if(mysqli_num_rows($cres) == 1){
							$cr = mysqli_fetch_assoc($cres);?>
							     <table class='table-hover'>
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Address1</td>
                                            <td>Address2</td>
                                            <td>Mobile</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $cr['firstname']." ".$cr['lastname'];?></td>
                                            <td><?php echo $cr['address1'];?></td>
                                            <td><?php echo $cr['mobile'];?></td>
                                            <td><?php echo $cr['email'];?></td>
                                        </tr>
                                    </tbody>
                                    </table>
						<?php
						}
					?>
				</div>

				<div class="col-md-6">

				</div>
			</div>



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php include 'inc/footer.php' ?>
