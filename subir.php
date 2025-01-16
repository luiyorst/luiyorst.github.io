<?php
include("conexion.php"); 
$con=conectar();
if(isset($_POST["registro"]))
{
    if(strlen($_POST["nombres"])<1)
    {
        echo "campo nombre vacio";
    }
    else
    {
        date_default_timezone_set('America/Lima');
       $nombre=trim($_POST["nombres"]);
       $apellido=trim($_POST["apellidos"]);
       $correo=trim($_POST["correo"]);
       $telefono=trim($_POST["telefono"]);
       $dni=trim($_POST["dni"]);
       $descripcion=trim($_POST["descripcion"]);
       $fechareg=date("d/m/y h:i:s");
   
       $nombrea=$_FILES["archivo"]["name"];
       $guardadoa=$_FILES["archivo"]["tmp_name"];

       $consulta="INSERT INTO usuario(nombre, apellido,correo,numero,dni,descripcion,fecha_reg,nom_archivo) VALUES ('$nombre','$apellido','$correo','$telefono','$dni','$descripcion','$fechareg','$nombrea')";
       $resultado=mysqli_query($con,$consulta);

      
       if(!file_exists("archivos"))
       {
              mkdir("archivos",0777,true);
              if(file_exists("archivos"))
              {
                if(move_uploaded_file($guardadoa,"archivos/".$nombrea))
                {
                    echo "archivo guardado con exito";
                }
                else
                {
                    echo "algo ocurrio al cargar el archivo ";
                }

              }
              
       } 

       else{
        if(move_uploaded_file($guardadoa,"archivos/".$nombrea))
        {
            
        }
        else
        {
            echo "algo ocurrio al cargar el archivo ";
        }

       }

       if($resultado)
       {
        
        echo("<script type='text/javascript'>alert('Lo estamos redireccionando'); </script>"); 
        header("Location: contact.php");

       }

       else{
        ?>
        <h3  class="bad">ups ocurrio algún error</h3>;
        <?php
       }

       

    }
}


?>