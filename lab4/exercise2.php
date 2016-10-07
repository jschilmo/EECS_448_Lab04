<?php
	echo "<html><body>";
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];
	$d = $_POST["d"];
	$e = $_POST["e"];
	$x = 0;
	echo "Answers:<br>";
	if($a == "Rite of Kindling"){
		$x++;
		echo "Question 1: You answered " . $a . ", and " . $a . " is correct!<br>";
	}
	else{
		echo "Question 1: You answered " . $a . ", but Rite of Kindling was correct<br>";
	}
	if($b == "Ornstein and Smough"){
		$x++;
		echo "Question 2: You answered " . $b . ", and " . $b . " is correct!<br>";
	}
	else{
		echo "Question 2: You answered " . $b . ", but Ornstein and Smough was correct<br>";
	}
	if($c == "Firelink Shrine's Graveyard"){
		$x++;
		echo "Question 3: You answered " . $c . ", and " . $c . " is correct!<br>";
	}
	else{
		echo "Question 3: You answered " . $c . ", but Firelink Shrine's Graveyard was correct<br>";
	}
	if($d == "Witch Beatrice"){
		$x++;
		echo "Question 4: You answered " . $d . ", and " . $d . " is correct!<br>";
	}
	else{
		echo "Question 4: You answered " . $d . ", but Witch Beatrice was correct<br>";
	}
	if($e == "Sack"){
		$x++;
		echo "Question 5: You answered " . $e . ", and " . $e . " is correct!<br>";
	}
	else{
		echo "Question 5: You answered " . $e . ", but Sack was correct<br>";
	}
	echo "You got " . $x . " questions right!<br>";
	echo "</body></html>";

?>