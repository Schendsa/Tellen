<?php
	$leeftijd=0;
	if(isset($_GET['leeftijd'])){
		$leeftijd=$_GET['leeftijd'];
		echo "Je bent " . $leeftijd . " jaar oud.";
		echo "<br/>";
		if ($leeftijd>=16) {
			echo "Je mag scooter rijden!";
			echo "<br/>";
		}
		else{}		}
		if ($leeftijd>=18) {
			echo "Je mag alcohol drinken!";
			echo "<br/>";
			echo "Je mag auto rijden!";
		}
		else{}
?>