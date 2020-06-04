<?php 

    // Verificando la llegada de los datos
    if(isset($_GET['id']))
     $id = $_GET['id'];
    
    if(isset($_GET['nombre']))
    $nombre = $_GET['nombre'];
    
    if(isset($_GET['telefono']))
    $telefono = $_GET['telefono'];
    
    try {
        // Insertando los datos
        include_once 'conexion.php';
        $query = "UPDATE `contacto` SET nombre ='$nombre', telefono = '$telefono' WHERE id = '$id' ;";
        $modificar = $con->query($query); 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
    $con->close();
    header("location: ../index.php")
?>