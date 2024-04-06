<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


// file_put_contents json_encode explode $_POST
// CRUD Create Read Update Delete


function showUserPage($user) {

$classes = implode(", ", $user->classes);

// heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<div>
	<h2>$user->name</h2>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Address</strong>
		<span>$user->address</span>
	</div>
	<div>
		<strong>Phone</strong>
		<span>$user->phone</span>
	</div>
</div>
HTML;

echo <<<HTML
<form method="POST" action="../admin/update_user.php">
    <input type="hidden" name="id" value="$user->id">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="$user->name"><br>
  
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="$user->email"><br>
  
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" value="$user->address"><br>
  
    <label for="tel">Phone:</label><br>
    <input type="tel" id="phone" name="phone" value="$user->phone"><br>
  
    <input type="submit" value="Submit">
</form>
HTML;


}





 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>

	</header>

	<div class="container">

	<div class="card soft">

		<?php  

		if(isset($_GET['id'])) {
			showUserPage($users[$_GET['id']]);
		} else {

		?>

		<h2>User List</h2>

		<nav class="nav">
			<ul>
			<?php 

			for($i=0;$i<count($users);$i++){
				echo "<li>
					<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
					</li>";
			}

			 ?>

			 </ul>
			</nav>

		<?php } ?>
	
	</div>


	</div>

</body>
	
</html>