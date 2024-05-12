<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dog Breeds</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<h2>Available Puppies</h2>

		<div class="form-control">
			<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Puppy Breeds">
			</form>
		</div>
		<div class="form-control">
			<div class="card soft">
			<div class="display-flex">
				<div class="flex-stretch display-flex">
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="working" type="button" class="form-button">Working</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="sporting" type="button" class="form-button">Sporting</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="non-sporting" type="button" class="form-button">Non-Sporting</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="herding" type="button" class="form-button">Herding</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="toy" type="button" class="form-button">Toy</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="terrier" type="button" class="form-button">Terrier</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="hound" type="button" class="form-button">Hound</button>
			</div>
			<div class="flex-none" style="margin-left: 5px;">
				<button data-filter="category" data-value="" type="button" class="form-button">All</button>
			</div>
		</div>
		</div>
			<div class="flex-none" style="padding: 5px;">
			<div class="form-select">
				<select class="js-sort">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Least Expensive</option>
					<option value="4">Most Expensive</option>
				</select>
			</div>
		</div>
		</div>
	</div>
	</div>

		<div class='productlist grid gap'></div>
	</div>

</body>

<?php include "parts/footer.php"; ?>

</html>