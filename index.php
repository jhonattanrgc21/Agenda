<?php 
    try {
        include_once 'database/conexion.php';
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Agenda de contactos</h1>

        <main>
            <h2>Nuevo contacto</h2>
            <form action="database/crear.php" method="post">
                <div class="campo">
                    <label for="nombre">Nombre:
                        <input type="text" id="nombre" name="nombre" autocomplete="off" required placeholder="Nombre...">
                    </label>
                </div>

                <div class="campo">
                    <label for="telefono">telefono:
                        <input type="text" id="telefono" name="telefono" autocomplete="off" required placeholder="Telefono...">
                    </label>            
                </div>
                
                <button type="submit">Agregar</button>
            </form>

            <!--Tabla de contenido -->
            <?php 
                $query = 'SELECT * FROM contacto;';
                $filas = $con->query($query);
            ?>
            <h2>Contactos existentes: <?php echo $filas->num_rows?></h2>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($resul = $filas->fetch_assoc()) {?>
                    <tr>
                        <td><?php echo $resul['nombre']; ?></td>
                        <td><?php echo $resul['telefono']; ?></td>
                        <td><a href="database/editar.php?id=<?php echo $resul['id'];?>" class="editar">Editar</a></td>
                        <td><a href="database/eliminar.php?id=<?php echo $resul['id'];?>" class="eliminar">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
    <?php $con->close();?>
</body>
</html>