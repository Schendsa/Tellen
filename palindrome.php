<?php
$word="";
$word=$_GET['word'];
$revword=strrev($word);
if ($revword==$word) {
	echo $word . " is een palindrome.";
}else{
	echo $word . " is geen palindrome.";
}
?>