<?php
$n = '1345679';
$length = strlen($n);
$arr = str_split($n);
for($i=0;$i<$length;$i++){
	echo $arr[$i];
	for($j=($i+1);$j<$length;$j++){
		echo "0";
	}
	echo "\n";
}
?>