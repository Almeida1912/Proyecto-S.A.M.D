<?php
//conectarnos a la base
$con=new  mysqli('localhost','root','','samd');
if ($con) {
     echo "conexion exitosa";
}else {
    echo "no se puede conectar";
}
 

?>