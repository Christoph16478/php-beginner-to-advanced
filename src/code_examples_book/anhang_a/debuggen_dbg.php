<?php
$i = 0;
$arr = [1, 2, 3];
if ($i = 1) {
	echo "ja ";
} else {
	echo "nein ";
}
foreach($arr as $a) {
	$output = $a . " \n";
}
echo "output: $output";