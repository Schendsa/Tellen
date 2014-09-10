<?php
	$sum=0;
	for ($nummer=1; $nummer <1000 ; $nummer++) {
		if ($nummer%3==0) {
			$sum=$sum+$nummer;
			echo "Nummer " . $nummer;
			echo "<br/>";
			echo "Sum " . $sum;
		}
		elseif ($nummer%5==0) {
			$sum=$sum+$nummer;
			echo "Nummer " . $nummer;
			echo "<br/>";
			echo "Sum " . $sum;
		}
	}
?>