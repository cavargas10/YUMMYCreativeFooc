<?php
require_once "../modelo/modelo_recetas.php";

class controlador_recetas
{
    /*variables de conexoion*/
    var $BaseDatos;
    var $Servidor;


    function controlador_recetas($host = "", $user = "", $pass = "", $db = "")
    {
        $this->BaseDatos = $db;
        $this->Servidor = $host;
        $this->Usuario = $user;
        $this->Clave = $pass;
    }

    public function BuscarReceta()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta']) && isset($_POST['porciones_Receta']) && isset($_POST['dificultad_Receta']) &&  isset($_POST['nombre_Ingredientes'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $porciones_Receta = $_POST['porciones_Receta'];
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $userResponse = $user->BuscarReceta($categoria_Receta, $porciones_Receta, $dificultad_Receta, $nombre_Ingredientes);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...s");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }


    public function PresentarRecetas()
    {
        $user = new modelo_recetas();

        $userResponse = $user->PresentarRecetas();
        if ($userResponse != 1) // exitoso
        {
            //echo '<script>alert("SQL correctos :)...");</script>';
            //echo "<script>location.href='../vistas/recetas.php'</script>";
        } else {
            echo '<script>alert("SQL Incorrectos...s");</script>';
            echo "<script>location.href='../vistas/recetas_user.php'</script>";
        }
    }
}
