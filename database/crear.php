<?php 

    // Verificando la llegada de los datos
    if(isset($_POST['nombre']))
        $nombre = $_POST['nombre'];

    if(isset($_POST['telefono']))
        $telefono = $_POST['telefono'];
    
    try {
        // Insertando los datos
        include_once 'conexion.php';
        $query = "INSERT INTO `contacto`(`nombre`, `telefono`) VALUES ('$nombre', '$telefono');";
        $insertar = $con->query($query); 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Agenda de contactos</h1>

        <main>
            <br>
            <?php 
                if($insertar)
                    echo 'Contacto guardado con exito'. '<br/><br/>';
                else
                    echo 'Error '. $con->error. '<br/><br/>';
            ?>
            <a href="../index.php" class="volver">Volver al inicio</a>
        </main>
    </div>
    <?php $con->close();?>
</body>
</html>