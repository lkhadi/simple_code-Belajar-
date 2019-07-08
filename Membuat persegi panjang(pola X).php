<?php 	
	$app = new Operation;
	$app->print_hashtag();

	Class Operation{
		private $n;

		function __construct(){
			$this->n = 0;
		}

		private function insert(){
			echo "Masukkan Nilai : ";
			$this->n = trim(fgets(STDIN));
		}

		function print_hashtag($n=null){
			if($this->n<1){
				$this->insert();
				$this->print_hashtag($this->n);
			}
			if($n%2==0) $n=$n-1;
			$e = $n;
			for($i=1;$i<=$n;$i++){
				for($j=$e;$j>=1;$j--){
					if($i==1 || $i==$n){
						echo "#";
					}else{
						if($i==$j || $j==$e || $j==1 || $j==($e-($i-1))){
							echo "#";
						}else{
							echo " ";
						}
					}
				}
				echo "\n";
			}
		}
	}
?>