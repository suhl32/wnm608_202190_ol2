<?php 

		include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dog & Co.</title>	

	<?php include "parts/meta.php"; ?>

</head>
<body>

<header>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<div class="hero" style="background-image: url('/../img/hero.jpg')">
			<div class="hero-text">
				<h1>Meet our Featured Breed</h1>
				<button>Click Here</button>
			</div>
		</div>	
	</div>
</header>
	<div class='container'>
		<div class="card soft">
					<div class="form-control">
						<form>
							<input type="search" class="hotdog" placeholder="Search Available Puppy Breeds">
						</form>
					</div>
		</div>
		<div class="container">

		<div class="grid gap xs-small md-medium">
			<!-- .col-xs-6.col-md-3*4>.card>{Card} -->	
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='/../img/basset_thumb.jpeg' class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='/../img/pom_thumb.jpeg' class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='/../img/corso_thumb.jpeg' class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3" class="media-image">
				<div class="card soft">
					<img src='/../img/dane_thumb.jpeg'></div>
			</div>
		</div>
	</div>

			 
</body>

	<?php include "parts/footer.php"; ?>	

</html>