<?php 

		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>	

	<?php include "parts/meta.php"; ?>

</head>
<body>

	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
			<p>In Your Cart</p>
			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart,'cartListTemplate') ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="card soft flat">
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Sub Total</div>
							<div class="flex-none">&dollar;5000.00</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Taxes</div>
							<div class="flex-none">&dollar;500.00</div>
						</div>
						<div class="card-section display-flex">
							<div class="flex-stretch"><strong>Actual Total</div>
							<div class="flex-none">&dollar;5500.00</div>
						</div>
						<div class="card-section">
							<a href="product_checkout.php" class="form-button">Checkout</a>
						</div>
					</div>
				</div>
			</div>
			
	</div>

			 
</body>

	<?php include "parts/footer.php"; ?>	

</html>