<?php
$number5=0;
for ($number=999; $number>100 ; $number--) { 
	for ($number2=999; $number2 >100 ; $number2--) { 
		$number3=$number*$number2;
		$number4=strrev($number3);
		if ($number3==$number4) {
			if ($number4>$number5) {
				$number5=$number4;
				echo $number5;
				echo "<br/>";
			}
		}
	}
}
?>