<?php
	require_once "helper_functions/db_connection.php";
	require_once "helper_functions/retrieve_products_pictures.php";
?>

<!doctype html>
  <head>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
	
	<nav>
		<div class="row">
			<div class="small-10 small-centered columns">
				<div class="logo">*Logo + Name*</div>
				<div class="nav-bar-menu">
					<ul class="nav-bar-menu-list">
						<li class="nav-bar-menu-item"><a class="nav-bar-item-link" href="index.php">Home</a></li>
						<li class="nav-bar-menu-item"><a class="nav-bar-item-link" href="products.php">Our Products</a></li>
						<li class="nav-bar-menu-item"><a class="nav-bar-item-link" href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="clr"></div>
			</div>
		</div>
	</nav>

	<div class="products-container">
		<div class="row">
			<div class="small-10 small-centered columns">
				<div class="products-container-title">
					<h2>Products</h2>
				</div>
				<div class="products-container-items">
					<div class="row">
						<div class="small-12 columns">
							<!-- <div class="row"> -->
								<?php
									for ($i = 1; $i < sizeof($products_arr); $i++) {
										echo '<div class="row">';
										for ($j = 0; $j < 3; $j++) {
											if ($i >= sizeof($products_arr)) {
												break;
											}
											echo '<div class="small-4 columns">
												  <div class="product-thumbnail">
													  <img src="' 
													  . $products_arr[$i]['product_thumbnail']  
													  . '" height="250" width="250" />
												  </div>
												  <div class="product-title">' 
												  . $products_arr[$i]['product_name'] 
												  . '</div>
												  
												  <div class="product-price"> $'
												  . $products_arr[$i]['product_price'] 
												  .'</div>
												  <hr>
												  </div>';
											$i++;
										}
										$i--;
										echo '</div>';
									}
								?>
							<!-- </div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>