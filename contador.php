<?php
	if(assert($_POST['visits'])){
		$fichero = "contador.txt";
		$archivo = fopen($fichero, "r");
		$num = fread($archivo, filesize($fichero));
		$visits = $_POST['visits'];
		if($visits==1){
			$num++;
			$archivo = fopen($fichero, "w+");
			fwrite($archivo, $num);
			echo "".$num;
			return;
		}else{
			echo "".$num;		
			return;
		}
	}
?>