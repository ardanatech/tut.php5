<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Functions : Argument Default Values</title>
</head>
<body>
	<?php
		function paint($room="offic" , $color = "red")
		{
			return "The color of the {$room} is {$color}.<br/>";
		}
		echo paint();
		echo paint("bedroom", "blue");
		echo paint("bedroom", null);
	?>
</body>
</html>