<?php

include_once "../lib/functions.php";

?>


<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Dogs&Co.</h1>	
			</div>	

			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul class="container display-flex">
					<!-- li*3>a[href=#].{Link $}  -->
					<li><a href="index.php">Home</a></Li>
					<li><a href="product_list.php">Store</a></Li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"><?=makeCartBadge(); ?></span>
					</a></li>	
					<li><a href="account.php">Account</a></li>
				</ul>
			</nav>
		</div>
	</header>