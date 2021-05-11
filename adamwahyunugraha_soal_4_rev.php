<?php
	$a = array(1,2,3,4,5,6,7,8,9,10);
	$b = array_map("myfunction",$a);

	function myfunction($v){
		echo $v.". Bilangan ";
		if ($v % 2 == 0){
			echo "Genap";
		}else{
			echo "Ganjil"; 
		}
		echo "</br>";
	}
?>