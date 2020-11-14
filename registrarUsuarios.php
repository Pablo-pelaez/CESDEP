<?php

include('BaseDatosT.php');

if(isset($_POST["botonEnvio"]))
{

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $descripcion = $_POST["descripcion"];
    $genero = $_POST["genero"];
    $imagen = $_POST["imagen"];

    //copia u objeto de la BD
    $transaccion = new BaseDatosT();

    //crear consulta
    $consultaSQL="INSERT INTO usuarios(nombre, apellidos, descripcion, genero, imagen) VALUES ('$nombre', '$apellido', '$descripcion', '$genero', '$imagen')";

    //llamo al metodo de la clase agregar BD agregarDatos
    $transaccion->agregarDatos($consultaSQL);
}   

?>