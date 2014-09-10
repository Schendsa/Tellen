<?php
$word=$_GET['word'];
$revword=strrev($word);
if ($revword=$word) {
	echo $word . "Is a palindrome.";
}else{echo $word . "Is not a palindrome.";}
?>