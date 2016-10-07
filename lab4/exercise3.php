<html>
<link href="style.css" type="text/css" rel="stylesheet"/>
<body>
<?php
	$a=$_POST["username"];
	$b=$_POST["password"];
	$c=$_POST["shards"];
	$d=$_POST["arrows"];
	$e=$_POST["swords"];
	$f=$_POST["shipping"];
	$g=0;
	if($f=="Free Seven Day"){
		$g = 0;
	}
	else if($f=="Overnight"){
		$g = 50;
	}
	else if($f=="Three Day"){
		$g = 5;
	}
	echo "Welcome " . $a . ", your password is " . $b . ", yay security!<br>";
	echo "Here is your receipt:<br><br>";
	echo "<table>";
	echo "<tr><td></td><td>Quantity</td><td>Cost per item</td><td>Sub Total</td></tr>";
	echo "<tr><td>Titanite Shards</td><td>" . $c . "</td><td>$800</td><td>$" . ($c * 800) . "</td></tr>";
	echo "<tr><td>Wooden Arrows</td><td>" . $d . "</td><td>$3</td><td>$" . ($d * 3) . "</td></tr>";
	echo "<tr><td>Longswords</td><td>" . $e . "</td><td>$1,000</td><td>$" . ($e * 1000) . "</td></tr>";
	echo "<tr><td>Shipping</td><td colspan='2'>" . $f . "</td><td>$" . $g . "</td></tr>";
	echo "<tr><td colspan='3'>Total cost</td><td>$" . (($c * 800) + ($d * 3) + ($e * 1000) + $g) . "</td></tr>";
	echo "</table>";
?>
</body>
</html>