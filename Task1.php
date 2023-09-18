<?php


function evenListPrintForLoop(int $start=1 ,int $end=20,int $step=2 ):void{
	for($i=$start+1;$i<=$end;$i+=$step){
			echo $i." ";
	}
	
}

function evenListPrintWhileLoop(int $start=1 ,int $end=20,int $step=2 ):void{
	$i=$start+1;
	while($i<=$end){
		echo $i." ";
		$i+=$step;
	}
}

function evenListPrintDoWhileLoop(int $start=1 ,int $end=20,int $step=2 ):void{
	$i=$start+1;
	do{
		echo $i." ";
		$i+=$step;
	}while($i<=$end);
}

// evenListPrintForLoop(1,20,2);
// evenListPrintWhileLoop(1,20,2);
// evenListPrintDoWhileLoop(1,20,2);

?>