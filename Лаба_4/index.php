<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Лабораторная работа 4</title>
    <link rel="stylesheet" href="style.css"> </head>
<body>
    <form method="post">
        <textarea name="text" rows="36" cols="200"></textarea>
        <br>
        <input type="submit" name="submit" value="Преобразовать"> </form>
</body>
</html>
<?php
if(isset($_POST['text'])){
    $text = " ".$_POST['text']." ";
    echo $text."<br>";
    $text = preg_replace('/([^>]?[A-ZА-ЯЁ][a-zа-яё]*)/u', " <div class=\"green\">$0</div> ", $text);
    $text = preg_replace('/([0-9]+[.,][0-9]{1})\d*/u', " <div class=\"red\">$1</div> ", $text);
    $text = preg_replace('/([^A-ZА-ЯЁa-zа-яё.][0-9]+[ ])/u', " <div class=\"blue\">$0</div> ", $text);
   echo $text;
}
?>
