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
<body>

<header>
	<?php include "parts/navbar.php"; ?>

	<div class="view-window" style="background-image: url('/../img/hero.jpg')">
			<div class="fill-parent display-flex flex-align-center flex-justify-center">
				<div class="card soft">
				Products!
			</div>
		</div>	
	</div>

	<div class='container'>
		<div class="card soft">
					<div class="form-control">
						<form>
							<input type="search" class="hotdog" placeholder="Search Available Puppy Breeds">
						</form>
					</div>
		</div>
	</div>
		<div class="container">
			<div class="card soft">
				<h2>Information</h2>
				<p>You'll love these products!</p>
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