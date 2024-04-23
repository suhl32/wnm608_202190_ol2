<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dog Breeds</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Available Puppies</h2>


		<?php 

		error_reporting(E_ALL);
		ini_set('display_errors', 1);



		$result = makeQuery(
			makeConn(), 
			"
			SELECT *
			FROM `products`
			ORDER BY `date_create` DESC
			LIMIT 25
			"
		);


		echo "<div class='productlist grid gap'>",array_reduce($result, 'productListTemplate', ''), "</div>";

		?>


	</div>

</body>

<?php include "parts/footer.php"; ?>

</html>