<?php
    $A = 1;

    try {
        $A = $A + 1;
    } catch (Exception $err) {
        $A += 2;
    } finally {
        ++$A;
    }
echo $A;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-   fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet"> </head>

<body>
    <div class="top-bar">
        <div class="logo"> <img src="glamour-logo-5229BB24EC-seeklogo.com.png"> </div>
        <div class="menu-bar">
        <?php
            $navs = [5, 9];
            $navs = array('About us', 'Gallery', 'Entertainment', 'Authorization');
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = 0;
            }
        ?>
        <ul>
            <?php
                    foreach ($navs as $key => $nav):
                ?>
                <li <?php if ($key == $id) {
                    echo 'class="active"';
                } ?>>
                    <a href="lab2.php?id=<?=$key; ?>">
                        <?= $nav; ?>
                    </a>
                </li>
                <?php
                    endforeach;
                ?>
                </ul>
        </div>
        <div class="burger" type="button" id="navToggle"> <i class="fas fa-bars burger_icon"></i> </div>
    </div>
    <div class="form-box">
        <form  method="POST">
            <p>Введите названия:</p>
            <p>
                <textarea name="cities"></textarea>
            </p>
            <p>
                <input type="submit" value="Ввести">
            </p>
        </form>
        <?php require_once 'lab22.php'; ?>
    </div>
</body>
</html>
