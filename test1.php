<?php


//Lineas Iniciales Archivo Original


for($i = 0; $i < 10; $i++){

	if(isset($_REQUEST['generoNat'])){//CAST
		switch($_REQUEST['generoNat']){
			case 'MASCULINO' :
				$_REQUEST['generoNat'] = 1;
				break;
			case 'FEMENINO' :
				$_REQUEST['generoNat'] = 2;
				break;
		}
	}

}


?>
