<?php

function firstFifteenFibonacci($limit=15){

	$num1 = 0;
	$num2 = 1;
	$sum = 0;
	$count = 0;

	for ($i=1;$i<=$limit;$i++){
		echo $num1." ";
		$sum = $num1 + $num2;
		$num1 = $num2;
		$num2 = $sum;
	}

}

firstFifteenFibonacci(15);

?>