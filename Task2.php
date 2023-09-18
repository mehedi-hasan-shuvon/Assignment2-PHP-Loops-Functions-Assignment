<?php
	function printSkippingMultipleOfFive(){
		for($i=1;$i<=50;$i++){
			if($i%5==0){
				continue;
			}
			echo $i." ";
		}
	}

	printSkippingMultipleOfFive();
?>