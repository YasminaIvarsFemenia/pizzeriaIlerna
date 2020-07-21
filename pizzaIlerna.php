
<?php
include 'conexion.php'
?>

<!DOCTYPE>
<html>
   <head>   
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
   
      <title>Pizza Ilerna</title>
   </head>
   <body>
       <div id ="logo"> Pizzeria Ilerna</div>
       <div >Servicio a domicilio</div>
       <div>Crea tu pizza</div>
       <div>Recoge en tienda</div>
       <div>Pedir ahora</div>

       <br>
       <table>
       <tr>
       <td>Número</td>
       <td>Nombre</td>
       <td>Añadir</td>
       <td>Eliminar</td>
       </tr>
       <?php

$sql="SELECT * FROM menu";
$result = mysqli_query($con, $sql);

while ($fila=mysqli_fetch_array($result))
}
 ?>
<tr>
<td><?php echo $fila['id']?></td>
<td><?php echo $fila['nombre']?></td>
<td><a href="&"name="añadir"value="añadir"><i class="fas fa-edit"></i></a></td>
<td><a href="#" name="eliminar" value="eliminar" ><i class="far fa-trash-alt"></i></a></td>
</tr>
<?php
}
?>
</table>
<form action="nuevomenu.php" method="post">
<div>
<label>Nombre</label>
<br>
<input type="text" name="nombreTxt" >
</tr>
<br>
<input type="submit" value="Enviar">
</div>
</form>

  <div id="direccion">C/barcelona, 4 15780 barcelona </div>
<?php
include 'cerrarconexion.php';
?>

</body>
</html> 