<?php
include "conexion.php";
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$tele=$_POST["tele"];
$mail=$_POST["gmail"];
$men=$_POST["mens"];

$SQL="SELECT * FROM mensa WHERE gmail='$mail'";
if ($resultad = $con->query($SQL)){
	if($resultado->num_rows>0){
		header("Location:login.php?existe=si&nombre=$nombre&apellido=$apellido&tele$tele&gmail=$mail");
		echo "telefono ya registrado";
	}
	else{
		$SQL="INSERT INTO mensa (nombre, apellido, tele, gmail, mens) VALUES ('$nombre','$apellido','$tele','$mail','$men')";
		if ($resultad = $con->query($SQL)){
			echo "Esta todo bien";
		}
	header("Location:..\index.php");
	}
}

?>