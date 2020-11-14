<?php

class BaseDatosT
{
    //atributos

    public $usuarioDB="root";
    public $passwordBD="";

    //constructor
    public function __construct(){}
        
    

    //métodos
    public function conectarBD()
    {
        


        try
        {
            $datosBD="mysql:host=localhost;dbname=tiendajueves";

            $conexionBD = new PDO($datosBD,$this->usuarioDB,$this->passwordBD);
            return ($conexionBD);
        }
        catch(PDOException $error)
        {
            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL)
    {
        //establecer una conexión
        $conexionBD = $this->conectarBD();

        //preparar una consulta
        $insertarDatos = $conexionBD->prepare($consultaSQL);

        //ejecutar la consulta
        $resultado = $insertarDatos->execute();

        //verifico resultado
        if($resultado)
        {
            echo("Usuario agregado");
        }
        else
        {
            echo("error al agregar el usuario");  
        }
    }

    public function consultarDatos($consultaSQL)
    {
        //establecer una conexión
        $conexionBD = $this->conectarBD();

        //preparar una consulta
        $consultarDatos = $conexionBD->prepare($consultaSQL);

        //Establecer el método de consulta
        $consultarDatos->setFetchMode(PDO:: FETCH_ASSOC);

        //Ejecutar la operación de la BD
        $consultarDatos->execute();

        //Retornar datos consultados
        return ($consultarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL)
    {
        //establecer una conexión
        $conexionBD = $this->conectarBD();

        //preparar una consulta
        $eliminarDatos = $conexionBD->prepare($consultaSQL);

        //Ejecutar consulta
        $resultado = $eliminarDatos->execute();

        //verifico resultado
        if($resultado)
        {
            echo("Usuario eliminado");
        }
        else
        {
            echo("error");   //documentacion para lanzar error
        }

    }

    public function editarDatos($consultaSQL)
    {
        //establecer una conexión
        $conexionBD = $this->conectarBD();

        //preparar una consulta
        $editarDatos = $conexionBD->prepare($consultaSQL);

        //Ejecutar consulta
        $resultado = $editarDatos->execute();

        //verifico resultado
        if($resultado)
        {
            echo("Usuario editado");
        }
        else
        {
            echo("error al editar");   //documentacion para lanzar error
        }
    }
}


?>