<?php

$filename = isset($_POST['full_filename']) ? $_POST['full_filename'] : '';

if (file_exists($filename)) {
    if (unlink($filename)) {
        echo 'Файл успешно удален!';
    }
} else {
    exit('Неверный путь к файлу');
}
