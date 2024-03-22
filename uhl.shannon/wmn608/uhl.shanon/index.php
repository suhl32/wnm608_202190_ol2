<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dog & Co.</title>	

	<? php include "parts/meta.php"; ?>

</head>
<body>

	<? php phpinfo() ?>
	
	<? php include "parts/navbar.php"; ?>

		</div>
		<div class="hero" style="background-image:url('img/dogfood.jpg')">
			<div class="hero-text">
				<h1>Valentine's Day Sale</h1>
				<button>See Deals</button>
			</div>
		</div>	
	</header>

    <div class="container">
    	<div class="card soft">
    		<h2>Grid</h2>
			<div class="grid">
				<div class="col-xs-6">column 6</div>
				<div class="col-xs-6">column 6</div>
			</div>
			<div class="grid gap xs-small md-medium">
				<div class="col-xs-4">column 4</div>
				<div class="col-xs-4">column 4</div>
				<div class="col-xs-4">column 4</div>

				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>

				<div class="col-xs-3">column 3</div>
				<div class="col-xs-6">column 6</div>
				<div class="col-xs-3">column 3</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="card soft">
    		<h2>Responsive Grid</h2>
			<div class="grid">
				<div class="col-xs-12 col-md-6">column 6</div>
				<div class="col-xs-12 col-md-6">column 6</div>
			</div>
			<div class="grid">
				<div class="col-xs-12 col-md-4 col-xl-3">column 4</div>
				<div class="col-xs-12 col-md-4 col-xl-6">column4</div>
				<div class="col-xs-12 col-md-4 col-xl-3">column 4</div>

				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
				<div class="col-xs-3">column 3</div>
			</div>

			<div class="grid ten gap">

				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
				<div class="col-xs-2">column 2</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="grid gap xs-small md-medium">
			<!-- .col-xs-6.col-md-3*4>.card>{Card} -->	
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='img/food.jpg' class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='img/ball.jpg' class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='img/med.jpg' class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3" class="media-image">
				<div class="card soft">
					<img src='img/collar.jpg'></div>
			</div>
		</div>
	</div>

	
			 
</body>

	<? php include "parts/footer.php"; ?>	

</html>