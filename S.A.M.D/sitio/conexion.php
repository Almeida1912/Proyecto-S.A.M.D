<?php
//conectarnos a la base
$con=new  mysqli('localhost','root','','sam');
if ($con) {
     echo "conexion exitosa";
}else {
    echo "no se puede conectar";
}
 

?>