<?php

function test100($i) {
	return $i + 100;
}
function test1($i) {
	return $i +1 ;
}

$x = 1;
$y = 100;
$bool = false;
echo ("test".($bool?$x:$y))($x);

?>