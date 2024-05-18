<?php 

		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dog & Co.</title>	

	<?php include "parts/meta.php"; ?>
</head>
<body class="flush">

<header>
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url('/../img/hero.jpg')">
			
	</div>
</header>

	<div class='container'>
		<div class="card soft">
		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Puppy Breeds">
			</form>
		</div>
		</div>
	</div>
		<div class="container">
			<div class="card soft">
				<h2>Dogs&Co.</h2>
				<p>Welcome to Dogs&Co., your premier destination for connecting with reputable breeders and finding your perfect canine companion. At Dogs&Co., we understand the importance of finding a healthy and well-bred dog to join your family, and we're here to make that process simple, transparent, and enjoyable.<br>Search for your new furry family member!</p>
			</div>
		</div>

	<div class="container">
		<h2>Latest Working Breeds</h2>
		<?php recommendedCategory("working"); ?>
		<h2>Latest Toy Breeds</h2>
		<?php recommendedCategory("toy"); ?>
	</div>	


			 
</body>

	<?php include "parts/footer.php"; ?>	

</html>