<?php 

    // Verificando la llegada de los datos
    if(isset($_GET['id']))
     $id = $_GET['id'];
    
    try {
        // Insertando los datos
        include_once 'conexion.php';
        $query = "DELETE FROM contacto WHERE id = '$id';";
        $modificar = $con->query($query); 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

    $con->close();
    header("location: ../index.php")
?>