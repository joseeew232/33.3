<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_record = $_POST['new_record'];
    file_put_contents('data.txt', "$new_record\n", FILE_APPEND);
    header('Location: index.php');
}
?>
