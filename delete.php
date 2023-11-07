<?php
if (isset($_GET['record'])) {
    $record_to_delete = $_GET['record'];
    $data = file('data.txt');
    $data = array_filter($data, function ($line) use ($record_to_delete) {
        return trim($line) !== trim($record_to_delete);
    });
    file_put_contents('data.txt', implode('', $data));
}
header('Location: index.php');
?>
