<?php
include 'conexion.php';
if (isset($_POST["id"]))
{
//Se almacena en una variable el id del registro a eliminar
$id= $_POST["id"];

//Preparar la consulta
$consulta = "DELETE FROM menu WHERE id=$id";

//Ejecutar la consulta
$resultado = mysqli_query($consulta, $con);

//redirigir nuevamente a la página para ver el resultado
header("location: pizzaIlerna.php");
}
  
?>
