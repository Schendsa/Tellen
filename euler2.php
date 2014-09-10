<?php
	$a=1;
	$b=2;
	$c=0;
	$d=0;
	for ($nummer=1; $c<4000000 ; $nummer++) {
		$c=$a+$b;
		$a=$b;
		$b=$c;
		if ($c>4000000) {}
		elseif ($c%2==0) {
			echo "Dit getal is even " . $c;
			echo "<br/>";
			$d=$d+$c;
		}
		else
		{
			echo "Dit getal is oneven " . $c;
			echo "<br/>";
			$d=$d+$c;
		}
	}
	echo "Dit is de som van de even getallen " . $d;
?>