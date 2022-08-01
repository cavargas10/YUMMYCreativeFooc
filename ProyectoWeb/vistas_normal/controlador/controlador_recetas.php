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
                echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                echo '<script>alert("SQL Incorrectos...s");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta2()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $userResponse = $user->BuscarReceta2($categoria_Receta);
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

    public function BuscarReceta3()
    {
        $user = new modelo_recetas();


        if (isset($_POST['nombre_Ingredientes'])) {
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $userResponse = $user->BuscarReceta3( $nombre_Ingredientes);
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

    public function BuscarReceta4()
    {
        $user = new modelo_recetas();


        if (isset($_POST['dificultad_Receta'])) {
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $userResponse = $user->BuscarReceta4( $dificultad_Receta);
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

    public function BuscarReceta5()
    {
        $user = new modelo_recetas();


        if (isset($_POST['porciones_Receta'])) {
            $porciones_Receta = $_POST['porciones_Receta'];
            $userResponse = $user->BuscarReceta5( $porciones_Receta);
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

    public function BuscarReceta6()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta']) &&  isset($_POST['nombre_Ingredientes'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $userResponse = $user->BuscarReceta6($categoria_Receta, $nombre_Ingredientes);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta7()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta']) &&  isset($_POST['dificultad_Receta'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $userResponse = $user->BuscarReceta7($categoria_Receta, $dificultad_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta8()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta']) &&  isset($_POST['porciones_Receta'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $porciones_Receta = $_POST['porciones_Receta'];
            $userResponse = $user->BuscarReceta8($categoria_Receta, $porciones_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta9()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta']) &&  isset($_POST['nombre_Ingredientes']) &&  isset($_POST['dificultad_Receta'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $userResponse = $user->BuscarReceta9($categoria_Receta, $nombre_Ingredientes, $dificultad_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta10()
    {
        $user = new modelo_recetas();


        if (isset($_POST['categoria_Receta']) &&  isset($_POST['nombre_Ingredientes']) &&  isset($_POST['porciones_Receta'])) {
            $categoria_Receta = $_POST['categoria_Receta'];
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $porciones_Receta = $_POST['porciones_Receta'];
            $userResponse = $user->BuscarReceta10($categoria_Receta, $nombre_Ingredientes, $porciones_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta11()
    {
        $user = new modelo_recetas();


        if (isset($_POST['nombre_Ingredientes']) &&  isset($_POST['dificultad_Receta'])) {
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $userResponse = $user->BuscarReceta11($nombre_Ingredientes, $dificultad_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta12()
    {
        $user = new modelo_recetas();


        if (isset($_POST['nombre_Ingredientes']) &&  isset($_POST['porciones_Receta'])) {
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $porciones_Receta = $_POST['porciones_Receta'];
            $userResponse = $user->BuscarReceta12($nombre_Ingredientes, $porciones_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta13()
    {
        $user = new modelo_recetas();


        if (isset($_POST['nombre_Ingredientes']) &&  isset($_POST['porciones_Receta'])  &&  isset($_POST['dificultad_Receta'])) {
            $nombre_Ingredientes = $_POST['nombre_Ingredientes'];
            $porciones_Receta = $_POST['porciones_Receta'];
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $userResponse = $user->BuscarReceta13($nombre_Ingredientes, $porciones_Receta, $dificultad_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            }
        }
    }

    public function BuscarReceta14()
    {
        $user = new modelo_recetas();


        if (isset($_POST['porciones_Receta'])  &&  isset($_POST['dificultad_Receta'])) {
            $porciones_Receta = $_POST['porciones_Receta'];
            $dificultad_Receta = $_POST['dificultad_Receta'];
            $userResponse = $user->BuscarReceta14($porciones_Receta, $dificultad_Receta);
            if ($userResponse != 1) // exitoso
            {
                //echo '<script>alert("SQL correctos :)...");</script>';
                //echo "<script>location.href='../vistas/recetas.php'</script>";
            } else {
                //echo '<script>alert("SQL Incorrectos...");</script>';
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
            echo "<script>location.href='../vistas/recetas.php'</script>";
        }
    }
}
