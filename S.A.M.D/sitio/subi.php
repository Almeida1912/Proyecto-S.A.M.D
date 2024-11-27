
<?php
include "../conexion.php";
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$usuario=$_POST["usuario"];
$clave=$_POST["contra"];

$SQL="SELECT * FROM login WHERE usuario ='$usuario'";
if ($resultado = $con->query($SQL)){
	if($resultado->num_rows>0){
		header("Location:../login.php?existe=si&nombre=$nombre&apellido=$apellido&email=$email&telefono=$telefono");
		echo "usuario existente";
	}
	else{
		$SQL="INSERT INTO login (nombre, apellido, email, telefono, usuario,contra) VALUES ('$nombre','$apellido','$email','$telefono','$usuario','$clave')";
		if ($resultado = $con->query($SQL)){
			echo "Esta todo bien";
		}
	header("Location:login.html");
	}
}

?>