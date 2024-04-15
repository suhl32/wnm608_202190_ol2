<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<div class="card soft">
		<h2>Article</h2>

		<p>This is article number 1 <?= $_GET['id'] ?></p>
		<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2><a href="https://www.eatingwell.com/article/7966417/healthiest-ingredients-to-look-for-in-pet-food/">The 6 Healthiest Ingredients to look for in Pet Food</a></h2>
				</div>
				<div class="flex-none">
					<small>Shop Food</small>
				</div>

			</div>
			 <div class="article-body">
	 			<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A quod earum facilis consequuntur vero, cumque quidem natus deserunt nemo obcaecati tempore tenetur explicabo molestias praesentium vel cum quas, atque. Optio ea nulla quidem voluptatem, nisi asperiores aperiam rem doloribus. Placeat.</p>
	 			<p>Blanditiis quae perferendis facere pariatur nam officiis, possimus maiores ullam sapiente dolores consequatur aliquid, dolorem, impedit fuga, magnam quos. Ducimus recusandae dolor totam, incidunt molestias, nemo vitae rerum nam explicabo atque non est hic iusto assumenda debitis, a, esse exercitationem.</p>
			 </div> 
		</article>
	</div>
	</div>

	
</body>

	<?php include "parts/footer.php"; ?>

</html>