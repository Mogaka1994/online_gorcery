<?php
	session_start();
	require_once '../config/connect.php';
	if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
		header('location: login.php');
	}
    $sqlns = mysqli_query($connection,"SELECT * FROM products");
    if($sqlns){
        $product_count =mysqli_num_rows($sqlns);
    }
    $sql = mysqli_query($connection,"SELECT * FROM users");
    if($sql){
        $customer_count =mysqli_num_rows($sql);
    }
    $sqli = mysqli_query($connection,"SELECT * FROM orders");
    if($sqli){
        $order_count =mysqli_num_rows($sqli);
    }
    $sqlcount = "SELECT SUM(totalprice) AS sum FROM orders";
    $count    = mysqli_query($connection,$sqlcount);
    $row      = mysqli_fetch_array($count);
    $sum      = $row['sum'];
//    mysqli_free_result($sqlns);
?>
<?php include 'inc/header.php'; ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Weekly Revenue',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Weekly Orders',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart1'));

        chart.draw(data, options);
      }
    </script>
<?php include 'inc/nav.php'; ?>
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
                <div class="row">
                    <div class="page_header text-center">
                        <h3 class="text-capitalize"><b>Dashboard</b></h3>
                    </div>
                </div>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">

                            <div class="card-image">

                                <!-- Content -->
                                <a href="#!">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">Total Orders:</h3>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>

                            </div>

                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-uppercase text-muted"><?php echo $order_count;?></p>
                                <h4 class="font-weight-bold float-right">&copy; Ramona</h4>
                            </div>
                        </div>
                        <!-- Card -->

                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">

                            <div class="card-image">

                                <!-- Content -->
                                <a href="#!">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">Total Transaction:</h3>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>

                            </div>

                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-uppercase text-muted">Ksh.<?php echo $sum;?></p>
                                <h4 class="font-weight-bold float-right">&copy; Ramona</h4>
                            </div>
                        </div>
                        <!-- Card -->

                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">

                            <div class="card-image">

                                <!-- Content -->
                                <a href="#!">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">Total Customers:</h3>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-uppercase text-muted"><?php echo $customer_count;?></p>
                                <h4 class="font-weight-bold float-right">&copy; Ramona</h4>
                            </div>
                        </div>
                        <!-- Card -->

                    </div>
                    <div class="col-md-3 mb-4">
                        <!-- Card -->
                        <div class="card gradient-card">

                            <div class="card-image">

                                <!-- Content -->
                                <a href="#!">
                                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                                        <div class="first-content align-self-center p-3">
                                            <h3 class="card-title">Total Products:</h3>
                                        </div>
                                        <div class="second-content align-self-center mx-auto text-center">
                                            <i class="far fa-money-bill-alt fa-3x"></i>
                                        </div>
                                    </div>
                                </a>

                            </div>

                            <!-- Data -->
                            <div class="third-content ml-auto mr-4 mb-2">
                                <p class="text-uppercase text-muted"><?php echo $product_count;?></p>
                                <h4 class="font-weight-bold float-right">&copy; Ramona</h4>
                            </div>
                        </div>
                        <!-- Card -->

                    </div>

                </div>
                <!--Grid row-->
				<div class="row">
                    <div class="page_header text-center">
                        <h3>Sales:</h3>
                    </div>
					<div class="col-md-6">
						<div class="row">
							<div id="curve_chart" style="width: 550px; height: 300px"></div>
						</div>

					</div>

					<div class="col-md-6">
						<div class="row">
							<div id="curve_chart1" style="width: 550px; height: 300px"></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
<?php include 'inc/footer.php' ?>
