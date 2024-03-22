<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Dog Breeds</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<div class="card soft">
		<h2>Breed List</h2>

		<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
		<ul>
			<li><a href="dog_breed.php?id=1">Breed 1</a></li>
			<li><a href="dog_breed.php?id=2">Breed 2</a></li>
			<li><a href="dog_breed.php?id=3">Breed 3</a></li>
			<li><a href="dog_breed.php?id=4">Breed 4</a></li>
		</ul>
	</div>
	</div>

</body>

	<?php include "parts/footer.php"; ?>

</html>