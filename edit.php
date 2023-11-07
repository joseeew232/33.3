<?php
if (isset($_GET['record'])) {
    $record_to_edit = $_GET['record'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updated_record = $_POST['updated_record'];
    $data = file('data.txt');
    foreach ($data as &$line) {
        if (trim($line) === trim($record_to_edit)) {
            $line = "$updated_record\n";
        }
    }
    file_put_contents('data.txt', implode('', $data));
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Editar Registro</h1>
    <form action="edit.php" method="post">
        <input type="text" name="updated_record" value="<?php echo $record_to_edit; ?>" required>
        <input type="hidden" name="record_to_edit" value="<?php echo $record_to_edit; ?>">
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
