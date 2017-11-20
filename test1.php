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


If($_REQUEST['generoNat'] = 1){

	var_dump("Salida Esperada MASCULINO");

}else{

	var_dump("Salida Esperada FEMENINO");

}


?>
