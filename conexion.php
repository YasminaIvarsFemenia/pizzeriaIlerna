<?php
//Parámetros de conexión
$host="localhost";
$bd="ilerna";
$user="ilerna";
$pass="ilerna";

//Conexión a nuestra base de datos
$con = new mysqli($host,$user,$pass,$bd);

//Control de errores de conexión
if($con->connect_errno){
    echo "La conexión ha fallado";
    exit();
}
?>