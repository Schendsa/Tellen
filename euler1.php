<?php
	$sum=0;
	for ($nummer=1; $nummer <1000 ; $nummer++) {
		if ($nummer%3==0) {
			$sum=$sum+$nummer;
			echo $nummer;
			echo "<br/>";
		}
		elseif ($nummer%5==0) {
			$sum=$sum+$nummer;
			echo $nummer;
			echo "<br/>";
		}
	}
	echo "Dit is de som van de even getallen " . $sum;
?>