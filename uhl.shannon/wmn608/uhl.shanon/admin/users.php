<?php 

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);


$empty_user = (object)[
	"name"=>"",
	"email"=>"",
	"address"=>"",
	"phone"=>"",

];


// file_put_contents json_encode explode $_POST
// CRUD Create Read Update Delete

// print_p([$_GET,$_POST]);

if(isset($_GET['action'])) { 
	switch($_GET['action']) {
		case "update":
		$users[$_GET['id']]->name = $_POST['user-name'];
		$users[$_GET['id']]->email = $_POST['user-email'];
		$users[$_GET['id']]->address = $_POST['user-address'];
		$users[$_GET['id']]->phone = $_POST['user-phone'];

		file_put_contents($filename,json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
		break;
	case "create":
		$empty_user->name = $_POST['user-name'];
		$empty_user->email = $_POST['user-email'];
		$empty_user->address = $_POST['user-address'];
		$empty_user->phone = $_POST['user-phone'];

		$id = count($users);

		$users[] = $empty_user;

		file_put_contents($filename,json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}?id=$id");
		break;
	case "delete":
		array_splice($users,$_GET['id'],1);
		file_put_contents($filename,json_encode($users));
		header("location:{$_SERVER['PHP_SELF']}");
		break;
	}	
}

// heredoc

function showUserPage($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";

// heredoc 

$display = <<<HTML
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

$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
	<h2>$addoredit User</h2>
	<div class="form-control">
		<label class="form-label" for="user-name">Name</label>
		<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter the User Name">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-email">Email</label>
		<input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" placeholder="Enter the User Email">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-address">Address</label>
		<input class="form-input" name="user-address"  id="user-address"type="text" value="$user->address" placeholder="Enter the User Address">
	</div>
	<div class="form-control">
		<label class="form-label" for="user-phone">Phone Number</label>
		<input class="form-input" name="user-phone" id="user-phone" type="text" value="$user->phone" placeholder="Enter the User Phone Number">
	</div>
	<div class="form-control">
		<input class="form-button" type="submit" value="Save Changes">
	</div>
</form>
HTML;

$output = $id == "new" ? $form :
	"<div class= 'grid gap'>
		<div class='col-xs-12 col-md-7'>$display</div>
		<div class='col-xs-12 col-md-5'>$form</div>
	</div>
	";

$delete = $id == "new" ? : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<nav class="display-flex">
		<div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
		<div class="flex-none">$delete</div>
</nav>
$output
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
					<li><a href="<?= $_SERVER['PHP_SELF'] ?> ">User List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
				</ul>
			</nav>
		</div>

	</header>

	<div class="container">

	<div class="card soft">

		<?php  

		if(isset($_GET['id'])) {
			showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);
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