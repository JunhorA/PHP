<?php

$datos = json_decode(file_get_contents('php://input'), true);


$macs = $datos["macs"];

print_r($macs);

$conexion = mysqli_connect("localhost", "root", "grupo2", "macs");
    if($conexion){
        echo 'La conexión de la base de datos se ha hecho satisfactoriamente';
   }else{
        echo 'Ha sucedido un error inesperado en la conexión de la base de datos';
    }   

$array = $macs;

//saco el numero de elementos
$longitud = count($array);

//Recorro todos los elementos
for($i=0; $i<$longitud; $i++){
      //saco el valor de cada elemento		
	$sql = "INSERT INTO tablamacs (macs) VALUES ('$array[$i]');";	  
	echo $sql;
	mysqli_query($conexion,$sql);  
}

?>
