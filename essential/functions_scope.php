<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Function : Scope </title>
</head>
<body>
	<?php
		$bar = "outside"; //global scope
		function foo(){
			global $bar;
			if(isset($bar)){
				echo "Foo: " .$bar. "<br/>";
			}
			$bar = "inside"; // local scope

		}

		echo "1: " . $bar ."<br/>";

		foo($bar);
		echo "2: " . $bar ."<br/>";


	?>
</body>
</html>