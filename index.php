<?php 
session_start();
require_once 'config/connect.php';
include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Shop</h2>
						<p>Making your grocery shopping easier<br><div class="text-center">Paullete Ramona</div> </p>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div id="shop-mason" class="shop-mason-4col">

							<?php 
								$sql = "SELECT * FROM products";
								if(isset($_GET['id']) & !empty($_GET['id'])){
									$id = $_GET['id'];
									$sql .= " WHERE catid=$id";
								}
								

								$res = mysqli_query($connection, $sql);
								while($r = mysqli_fetch_assoc($res)){
							?>
								<div class="sm-item isotope-item">
									<div class="product">
										<div class="product-thumb">
											<img src="admin/<?php echo $r['thumb']; ?>" class="img-responsive" width="250px" alt="">
											<div class="product-overlay">
												<span>
												<a href="single.php?id=<?php echo $r['id']; ?>" class="fa fa-link"></a>
												<a href="addtocart.php?id=<?php echo $r['id']; ?>" class="fa fa-shopping-cart"></a>
												</span>					
											</div>
										</div>
										<div class="rating">
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
											<span class="fa fa-star act"></span>
										</div>
										<h2 class="product-title"><a href="single.php?id=<?php echo $r['id']; ?>"><?php echo $r['name']; ?></a></h2>
										<div class="product-price">Ksh. <?php echo $r['price']; ?>.00/-<span></span></div>
									</div>
								</div>
							<?php } ?>

								
							</div>
						</div>
						<div class="clearfix"></div>
						<!-- Pagination -->
						<div class="page_nav">
							<a href=""><i class="fa fa-angle-left"></i></a>
							<a href="" class="active">1</a>
							<a href="">2</a>
							<a href="">3</a>
							<a class="no-active">...</a>
							<a href="">9</a>
							<a href=""><i class="fa fa-angle-right"></i></a>
						</div>
						<!-- End Pagination -->
					</div>
				</div>
			</div>
		</div>
	</section>
<div class="clearfix space70"></div>
<!-- FOOTER -->
<footer id="footer2">

    <div class="footer-bottom container">
        <div class="row">
            <div class="col-md-6">
                <p>© <?php echo date("Y"); ?>  Easy Foods Grocery Store. All rights reserved | Design by Polycarp</p>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</footer>
<?php include("inc/tawk.php");?>
<!-- FOOTER -->
</div>
<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/dialogFx.js"></script>
<script src="js/dialog-js.js"></script>
<script src="js/navigation/jquery.easing.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/navigation/scroll.js"></script>
<script src="js/navigation/jquery.sticky.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/isotope/isotope.pkgd.js"></script>
<script src="js/superfish/js/hoverIntent.js"></script>
<script src="js/superfish/js/superfish.js"></script>
<script src="js/tweecool.js"></script>
<script src="js/jquery.bpopup.js"></script>
<script src="js/pikaday/pikaday.js"></script>
<script src="js/classie.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.prettyphoto.js"></script>
<script src="js/script.js"></script>
<script src="js/booking.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/gmap.js"></script>
<script src="js/gmap2.js"></script>
</body>
</html>

