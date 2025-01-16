<?php

include("conexion.php"); 
$con=conectar();


if(isset($_POST['consulta']))
{
 
  $buscar= $_POST['codigo'];
  $consulta="SELECT nombre,apellido,descripcion,fecha_reg,nom_archivo,estado  FROM usuario where dni ='$buscar'";
   
  $consul=mysqli_query($con,$consulta);
  
  
  while($row=mysqli_fetch_array($consul))
  {
    echo $row['nombre'];
    echo $row['apellido'].'<br>';

  }

}


      

?>