<?php


$a=2;

do{
	echo $a . "\n";
	$a = $a* $a;
	usleep(100000);

}

while ($a<=1000000);

?>