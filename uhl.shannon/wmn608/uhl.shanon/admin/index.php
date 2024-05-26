<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../lib/php/functions.php";

$empty_product = (object)[
	"breed"=>"Labradoodle",
	"price"=>"8000",
	"category"=>"Sporting",
	"size"=>"large",
	"description"=>"A ridiculous designer breed that is really just a mutt, which people pay way too much money for",
	"thumbnail"=>"doodle_thumb.jpg",
	"images"=>"doodle_1.jpg,doodle_adult.jpg",
	"quantity"=>"2"
];


// LOGIC
try{
	$conn = makePDOConn();


	 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo 'Form submitted successfully!';
        print_r($_POST);
    } else {
        
    }

if (isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
		$statement = $conn->prepare("UPDATE `products` SET `breed`=?, `price`=?, `quantity`=?, `category`=?, `size`=?, `description`=?, `thumbnail`=?, `images`=?, `date_modify`=NOW()WHERE `id`=?");
		$statement->execute([
			$_POST['product-breed'],
			$_POST['product-price'],
			$_POST['product-quantity'],
			$_POST['product-category'],
			$_POST['product-size'],
			$_POST['product-description'],
			$_POST['product-thumbnail'],
			$_POST['product-images'],
			$_GET['id']
		]);
	header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
		$statement = $conn->prepare("INSERT INTO `products` (`breed`, `price`, `quantity`, `category`, `size`, `description`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES (?,?,?,?,?,?,?,?,NOW(),NOW())");
		$statement->execute([
			$_POST['product-breed'],
			$_POST['product-price'],
			$_POST['product-quantity'],
			$_POST['product-category'],
			$_POST['product-size'],
			$_POST['product-description'],
			$_POST['product-thumbnail'],
			$_POST['product-images']
		]);
		$id = $conn->lastInsertID();
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
        $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
        $statement->execute([$_GET['id']]);
            header("location:{$_SERVER['PHP_SELF']}");
            break;
    }   
  } else {
  	
  }  
} catch(PDOException $e) {
    die($e->getMessage());
} 













// TEMPLATES
function productListItem($r,$o) {
    return $r.<<<HTML
<div class="card soft">
    <div class="display-flex">
        <div class="flex-none images-thumbs"><img src="/$o->thumbnail"></div>
        <div class="flex-stretch" style="padding:1em">$o->breed</div>
        <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a></div>
    </div>
</div>
HTML;
}

function showProductPage($o) {
    $id = $_GET['id'];
    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id == "new" ? "create" : "update";
    $images = array_reduce(explode(",", $o->images), function($r, $o) {
        return $r."<img src='/$o'>";
    });

    // Display section
    $display = <<<HTML
    <div>
        <h2>$o->breed</h2>
        <div class="form-control">
            <label class="form-label">Price</label>
            <span>&dollar;$o->price</span>
        </div>
        <div class="form-control">
            <label class="form-label">Quantity</label>
            <span>$o->quantity</span>
        </div>
        <div class="form-control">
            <label class="form-label">Category</label>
            <span>$o->category</span>
        </div>
        <div class="form-control">
            <label class="form-label">Size</label>
            <span>$o->size</span>
        </div>
        <div class="form-control">
            <label class="form-label">Description</label>
            <span>$o->description</span>
        </div>
        <div class="form-control">
            <label class="form-label">Thumbnail</label>
            <span class="images-thumbs"><img src="/$o->thumbnail"></span>
        </div>
        <div class="form-control">
            <label class="form-label">Other Images</label>
            <span class="images-thumbs">$images</span>
        </div>
    </div>
HTML;

    // Form section
    $form = <<<HTML
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <h2>$addoredit Product</h2>
        
        <input type="hidden" name="action" value="$createorupdate">
        <div class="form-control">
            <label class="form-label" for="product-breed">Breed</label>
            <input class="form-input" name="product-breed" id="product-breed" type="text" value="$o->breed" placeholder="Enter the Product Breed">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-price">Price</label>
            <input class="form-input" name="product-price" id="product-price" type="number" min="0" max="8000" step="100" value="$o->price" placeholder="Enter the Product Price">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-quantity">Quantity</label>
            <input class="form-input" name="product-quantity" id="product-quantity" type="number" min="0" max="8000" step="1" value="$o->quantity" placeholder="Enter the Product Quantity">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-category">Category</label>
            <input class="form-input" name="product-category" id="product-category" type="text" value="$o->category" placeholder="Enter the Product Category">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-size">Size</label>
            <input class="form-input" name="product-size" id="product-size" type="text" value="$o->size" placeholder="Enter the Product Size">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-description">Description</label>
            <textarea class="form-input" name="product-description" id="product-description" placeholder="Enter the Product Description">$o->description</textarea>
        </div>
        <div class="form-control">
            <label class="form-label" for="product-thumbnail">Thumbnail</label>
            <input class="form-input" name="product-thumbnail" id="product-thumbnail" type="text" value="$o->thumbnail" placeholder="Enter the Product Thumbnail">
        </div>
        <div class="form-control">
            <label class="form-label" for="product-images">Images</label>
            <input class="form-input" name="product-images" id="product-images" type="text" value="$o->images" placeholder="Enter the Product Images, comma separated">
        </div>
        <div class="form-control">
            <input class="form-button" type="submit" value="Save Changes">
        </div>
    </form>
HTML;

    $output = $id == "new" ? "<div class='card soft'>$form</div>" :
    "<div class='grid gap'>
        <div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
        <div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
    </div>";

    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

    echo <<<HTML
    <div class="card soft">
        <nav class="display-flex">
            <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
            <div class="flex-none">$delete</div>
        </nav>
    </div>
    $output
HTML;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Admin Page</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Product Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<?php  

		if(isset($_GET['id'])) {
			showProductPage(
				$_GET['id']=="new" ?
					$empty_product :
					makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0]
			);
		} else {

		?>

			<h2>Product List</h2>

			<?php 

			$result = makeQuery(makeConn(),"SELECT * FROM `products` ORDER BY `date_create` DESC");

			echo array_reduce($result,'productListItem');

			?>


			<?php } ?>	


	</div>
</body>
