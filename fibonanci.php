<?php

function fibonancci($num){


$num_1=1;
$num_2=0;
$output=3;

for ($y=0; $y <=$num ; $y++) { 
	$output=$num_1+$num_2;
	$num_1=$num_2;
	$num_2=$output;

	echo $output.",";
	// code...
}
}
fibonancci(10);
?>