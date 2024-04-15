<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dog Breed</title>

	<?php include "parts/meta.php"; ?>

</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
	<div class="card soft">
		<h2>Alaskan Malamute</h2>

		<p>This is dog # <?= $_GET['id'] ?></p>
		<img src="../img/breed_malamute.jpeg">
		<p>An immensely strong, heavy-duty worker of spitz type, the Alaskan Malamute is an affectionate, loyal, and playful but dignified dog recognizable by his well-furred plumed tail carried over the back, erect ears, and substantial bone. The Alaskan Malamute stands 23 to 25 inches at the shoulder and weighs 75 to 85 pounds. Everything about Mals suggests their origin as an arctic sled dog: The heavy bone, deep chest, powerful shoulders, and dense, weatherproof coat all scream, 'I work hard for a living!' But their almond-shaped brown eyes have an affectionate sparkle, suggesting Mals enjoy snuggling with their humans when the workday is done. Mals are pack animals. And in your family 'pack,' the leader must be you. If a Mal doesn't respect you, he will wind up owning you instead of the other way around. Firm but loving training should begin in early puppyhood. That said, a well-behaved Mal is a joy to be with'playful, gentle, friendly, and great with kids.</p><br>

		<h2>Available Puppies</h2>

		<div class="grid gap xs-small md-medium">
			<!-- .col-xs-6.col-md-3*4>.card>{Card} -->	
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='../img/malamute_1.jpeg' class="media-image"><p>Malamute Puppy</p></div>
					
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft">
					<img src='../img/staffie_2.jpeg' class="media-image"><p>Malamute Puppy</p></div>
					
			</div>
		</div>
	</div>
	</div>













	
</body>

	<?php include "parts/footer.php"; ?>

</html>