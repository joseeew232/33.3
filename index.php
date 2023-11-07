<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Aplicación de Gestión de Registros</h1>
    <div id="records">
        <h2>Registros existentes:</h2>
        <ul>
            <?php
            $data = file('data.txt', FILE_IGNORE_NEW_LINES);
            foreach ($data as $record) {
                echo "<li>$record <a href='edit.php?record=$record'>Editar</a> <a href='delete.php?record=$record'>Eliminar</a></li>";
            }
            ?>
        </ul>
    </div>
    <div id="add-record">
        <h2>Agregar un nuevo registro:</h2>
        <form action="add.php" method="post">
            <input type="text" name="new_record" placeholder="Nuevo registro" required>
            <button type="submit">Agregar</button>
        </form>
    </div>
</body>
</html>
