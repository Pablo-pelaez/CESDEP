<?php

    include('BaseDatosT.php');

    //Recibo el id que voy a eliminar
    $idEliminar = ($_GET["id"]);

    //Crear el objeto de la clase BaseDatos
    $transaccion = new BaseDatosT();

    //Crear la consulta para eliminar
    $consultaSQL = "DELETE FROM usuarios WHERE idUsuario='$idEliminar' ";

    //Utilizar el método para eliminar
    $transaccion->eliminarDatos($consultaSQL);

?>