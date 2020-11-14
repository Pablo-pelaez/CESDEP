<?php  

include ('BaseDatosT.php');


//Crear el objeto de la DB
$transaccion = new BaseDatosT();

//Recibir datos
if(isset($_POST["botonEditar"]))
{
    //Recibir el id que qiero editar
    $id=$_GET["id"];
    
    $nombre = $_POST["nombreEditar"];
    $descripcion = $_POST["descEditar"];

    //Consulta para editar un registro
    $consultaSQL = "UPDATE usuarios SET nombre='$nombre' ,descripcion='$descripcion' WHERE idUsuario='$id' ";

    //Utilizar el método editarDatos
    $transaccion->editarDatos($consultaSQL);

    //Redirección
    header("location:listaUsuarios.php");
    
}



?>