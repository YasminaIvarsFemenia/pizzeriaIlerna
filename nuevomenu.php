<?php
include 'conexion.php';
//insertar registros
if(isset($_POST['nombreTxt']) && !empty($_POST['nombreTxt'])) {

    echo $_POST['nombreTxt'];
  

$query = "INSERT INTO menu(nombre)
VALUES ('{$_POST['nombreTxt']}')";

$lastid =mysqli_query($con,$query); 

$lastid = mysqli_insert_id($con); 

}

header('Location: pizzaIlerna.php');

?>