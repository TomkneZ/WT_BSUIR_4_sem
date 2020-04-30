<?php
if (count($_COOKIE) == 0) {
    echo "<br>The cookie list is currently empty!" . "<br><br>";
} else {
    echo "<br><b>Name</b> -> <b>Value</b>" . "<br>";
    foreach ($_COOKIE as $key => $value) {
        echo '<a href="index.php?name='.$key.'">Delete</a>  '.$key." -> ".$value."<br>";
    }
}
