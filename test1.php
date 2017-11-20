<?php


//Lineas Iniciales Archivo Original
//Cambio de Cast por Tipo de Variable

for($i = 0; $i < 10; $i++){

	if(isset($_REQUEST['generoNat'])){//CAST
		switch($_REQUEST['generoNat']){
			case 1 :
				$_REQUEST['generoNat'] = 'MASCULINO';
				break;
			case 2 :
				$_REQUEST['generoNat'] = 'FEMENINO';
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
