<?php

	function firstTenFibonacci($limit=10){

		$num1 = 0;
		$num2 = 1;
		$sum = 0;
		$count = 0;

		while($count < $limit){
			if($num1>100){
				break;
			}
			echo $num1." ";
			$sum = $num1 + $num2;
			$num1 = $num2;
			$num2 = $sum;
			$count++;
		}
	}

	firstTenFibonacci(10);

?>