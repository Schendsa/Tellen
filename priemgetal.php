<?php
for ($priem=2; $priem <1000; $priem++) { 
	if ($priem%2==0) {
		if ($priem==2) {
			echo $priem;
			echo "<br/>";
		}
	}
	elseif ($priem%3==0) {
		if ($priem==3) {
			echo $priem;
			echo "<br/>";
		}
	}
	elseif ($priem%5==0) {
		if ($priem==5) {
			echo $priem;
			echo "<br/>";
		}
	}
	elseif ($priem%7==0) {
		if ($priem==7) {
			echo $priem;
			echo "<br/>";
		}
	}
	else{
		echo $priem;
		echo "<br/>";
	}
}
?>