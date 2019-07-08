<?php 	
	$app = new Operation;
	$app->print_number();

	Class Operation{
		private $n;

		function __construct(){
			$this->n = 0;
		}

		private function insert(){
			echo "Masukkan Nilai : ";
			$this->n = trim(fgets(STDIN));
		}

		function print_number($n=null){
			if($this->n<1){
				$this->insert();
				$this->print_number($this->n);
			}
			for($i=$n;$i>0;$i--){
				echo $i.' ';
				if($i==1){
					echo "\n";
					$i= $n--;
				}
			}
		}
	}
?>