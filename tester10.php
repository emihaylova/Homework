<?php
//Напишете програма, която определя
//в зависимост от зададените страни,
//дали триъгълника е равностранен, равнобедрен
//или разностранен.

$a = 12;
$b = 12;
$c = 10;

if ($a == $b && $b == $c) {
	echo "ravnstr"; 
} elseif (($a == $b && $b!=$c)||($b == $c && $c!=$a)||($a == $c && $c!=$b)) {
	echo "ravnbedr";
} else {
	echo "raznostr";

}
