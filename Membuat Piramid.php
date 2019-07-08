<?php 
$n = trim(fgets(STDIN));
$n = ($n%2==0 ? $n+1 : $n);
$s = round($n/2)-1;
$tmp=0;
for($i=0;$i<$n;$i++){
	if($s==0 || ($i>=$s && $i<($n-$s))){
		echo "*";
	}else{
		echo " ";
	}
	if($i==($n-1) && $s>0){
		echo "\n";
		$s--;
		$i= -1;
	}
}
?>