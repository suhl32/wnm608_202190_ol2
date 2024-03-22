<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article List</title>	

	<?php include "parts/meta.php"; ?>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<div class="card soft">
		<h2>Article List</h2>

		<!-- ul>li*4>a[href="product_item.php"]>{Product $} -->
		<ul>
			<li><a href="article_item.php?id=1">Article 1</a></li>
			<li><a href="article_item.php?id=2">Article 2</a></li>
			<li><a href="article_item.php?id=3">Article 3</a></li>
			<li><a href="article_item.php?id=4">Article 4</a></li>
		</ul>
	</div>
	</div>
	

</div>
</body>

	<?php include "parts/footer.php"; ?>

</html>