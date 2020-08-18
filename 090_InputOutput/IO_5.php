<?php
	$contents = file_get_contents('data.txt');
	echo $contents."<hr>";
	echo (str_replace("\n", "<br />", $contents));
?>