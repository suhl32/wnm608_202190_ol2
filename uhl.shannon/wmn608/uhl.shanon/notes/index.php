<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>

	<?php
		echo "<div>Hello World</div>";
		echo "<div>Goodbye World</div>";

		// Variables
		$a = 5;

		echo $a;

		// String Interpolation
		echo "<div>I have $a things</div>";
		echo '<div>I have $a things</div>';

		// Number
		// Integer

		$b = 15;

		// Float
		$b = 0.576;

		$b = 10;


		// String
		$name = "yerguy2";

		// Boolean
		$isOn = true;

		// Math
		// PEMDAS

		echo (5 - 4) * 2;

		// Concatenation

		echo "<div>b + a" . "= c</div>";
		echo "<div>$b + $a = ".($a+$b)."</div>";

		?>

		<hr>
		<div>This is my name</div>
		<div>
			</div>

			<?php

			$firstname = "Shannon";
			$lastname  = "Uhl";
			$fullname  = "$firstname $lastname";

			echo $fullname; 

			?>
			<hr>
			<?php

			// superglobal
			// ?name=Joey
			echo "<a href='?name=Joey'>visit</a><br>";
			echo "<div>My name is {$_GET['name']}</div>";

			// ?name=Joey&type=textarea
			echo "<a href='?name=Joey&type=textarea'>visit</a><br>";
			echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

			?>
			<hr>
			<?php 

			// Array
			$colors = array("red","green","blue");

			echo $colors[2];

			echo "
				<br>$colors[0]
				<br>$colors[1]
				<br>$colors[2]

			";

			echo count($colors);

			?>

			<div style="color:<?= $colors[1] ?>">
				This text is green
			</div>

			<hr>
			<?php

			//Associative Array
			$colorsAssociative = [
				"red" => "#f00",
				"green" => "#0f0",
				"blue" => "#00f"
			];

			echo $colorsAssociative['green'];

			?>

			<hr>
			<?php

			// Casting
			$c = "$a";
			$d = $c*1;

			$colorsObject = (object)$colorsAssociative;

			// echo $colors;

			echo "<hr>";

			//Array Index Notation
			echo $colors[0]."<br>";
			echo $colorsAssociative['red']."<br>";
			echo $colorsAssociative[$colors[0]]."<br>";

			// Object Property Notation
			echo $colorsObject->red."<br>";
			echo $colorsObject->{$colors[0]}."<br>";



			?>

			<hr>
			<?php 

			print_r($colors);
			echo "<hr>";
			print_r($colorsAssociative);
			echo "<hr>";
			echo "<pre>",print_r($colorsObject),"</pre>";

			// Function
			function print_p($v) {
				echo "<pre>",print_r($v),"</pre>";
			}

			print_p($_GET);



			?>
















		
	</body>
	</html>	[23-Mar-2024 18:16:34 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:16:56 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:16:57 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:16:58 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:17:25 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:17:26 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:17:56 UTC] PHP Parse error:  syntax error, unexpected 'include' (T_INCLUDE) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 7
[23-Mar-2024 18:20:49 UTC] PHP Parse error:  syntax error, unexpected 'phpinfo' (T_STRING) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 12
[23-Mar-2024 18:20:50 UTC] PHP Parse error:  syntax error, unexpected 'phpinfo' (T_STRING) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 12
[23-Mar-2024 18:23:28 UTC] PHP Parse error:  syntax error, unexpected 'phpinfo' (T_STRING) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 12
[23-Mar-2024 18:23:47 UTC] PHP Parse error:  syntax error, unexpected 'phpinfo' (T_STRING) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 12
[23-Mar-2024 18:23:48 UTC] PHP Parse error:  syntax error, unexpected 'phpinfo' (T_STRING) in /home/zd9tuyohxbqz/public_html/wmn608/uhl.shanon/index.php on line 12
