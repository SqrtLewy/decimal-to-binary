<?php
$a = 14;
$d = 1;
$i = 0;

while($a){
	$i = $i+($a%2)*$d;
	$a = floor($a/2);
	$d = $d*10;
}
echo $i;