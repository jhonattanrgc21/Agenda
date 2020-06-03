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
            <form action="crear.php" method="post">
                <div class="campo">
                    <label for="nombre">Nombre:
                        <input type="text" id="nombre" autocomplete="off" required placeholder="Nombre...">
                    </label>
                </div>

                <div class="campo">
                    <label for="telefono">telefono:
                        <input type="text" id="telefono" autocomplete="off" required placeholder="Telefono...">
                    </label>            
                </div>
                
                <button type="submit">Agregar</button>
            </form>

            <!--Tabla de contenido -->
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Maria Barrios</td>
                        <td>04244500514</td>
                        <td><button class="editar">Editar</button></td>
                        <td><button class="eliminar">Eliminar</button></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Jhonattan Garcia</td>
                        <td>04144815755</td>
                        <td><button class="editar">Editar</button></td>
                        <td><button class="eliminar">Eliminar</button></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>William Garcia</td>
                        <td>04144184415</td>
                        <td><button class="editar">Editar</button></td>
                        <td><button class="eliminar">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
    
</body>
</html>