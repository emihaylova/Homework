<?php
$a = rand (0, 1000);
 echo "a = ". $a;
if ($a%3==0 && $a%5==0 && $a%7==0) {
	echo "<p>"."vs"."</p>";
} elseif ($a%3==0) {
	echo "<p>"."three"."</p>";
} elseif ($a%5==0) {
	echo "<p>"."five"."</p>";
} elseif ($a%7==0) {
	echo "<p>"."seven"."</p>";
}
else {
	echo "<p>"."razl</p>";
}

