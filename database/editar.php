<?php 
    if(isset($_GET['id']))
        $id = $_GET['id'];

    try {
        include_once 'conexion.php';
        $query = "SELECT * FROM contacto WHERE id = $id;";
        $filas = $con->query($query);
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
            <h2>Editar contacto</h2>
            <form action="actualizar.php" method="get">
                <?php while($resul = $filas->fetch_assoc()) {?>
                    <div class="campo">
                        <label for="nombre">Nombre:
                            <input type="text" id="nombre" name="nombre" value="<?php echo $resul['nombre'];?>" autocomplete="off" required placeholder="Nombre...">
                        </label>
                    </div>
                    
                    <div class="campo">
                        <label for="telefono">telefono:
                            <input type="text" id="telefono" name="telefono" value="<?php echo $resul['telefono'];?>" autocomplete="off" required placeholder="Telefono...">
                        </label>            
                    </div>
                    
                    <input type="hidden" name="id" value="<?php echo $resul['id'];?>">
                    <button type="submit">Guardar</button>
                    
                    <br><br>
                    <a href="../index.php" class="volver">Volver al inicio</a>
                <?php }?>
            </form>
        </main>
    </div>
    <?php $con->close();?>
</body>
</html>