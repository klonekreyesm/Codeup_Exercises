<?php


$a=100;

do{
	echo $a . "\n";
	$a-=5;
	usleep(100000);

}

while ($a>=10);

?>