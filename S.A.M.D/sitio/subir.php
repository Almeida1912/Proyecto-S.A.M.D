<?php
	//tomo apellido , nombre, etc
$n=$_REQUEST["espacio"];
$a=$_REQUEST["precio"];
$f=$_REQUEST["fecha"];
$d=$_REQUEST["horario"];


//generar la consulta$nombre_imagen=$_FILES['imagen']['name'];
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tamanio_imagen=$_FILES['imagen']['size'];
//generar la consulta
$SQLUP= "INSERT INTO alquiler (espacio, precio, fecha, horario, imagen) VALUES ('$n','$a','$f','$d''$nombre_imagen')";

//echo $_FILES['imagen']['size'] ." bytes";

if ($tamanio_imagen <= 1000000) {

	if ($tipo_imagen=="image/jpeg" or $tipo_imagen=="image/gif" or $tipo_imagen=="image/png" or $tipo_imagen=="image/jpg") {
		//ruta de la carpeta destino 
		// server = htdocs
	$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'../S.A.M.D/img/';
		//copia imagen de la carpeta temporal a la carpeta elegida/destiono
	move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
	include ("conexion.php");
	$con->query($SQLUP);
}
else { echo "Solo se pueden subir imagenes";}

}
else { 
	echo "el tamanio de la imagen no es aceptado";
}
?>