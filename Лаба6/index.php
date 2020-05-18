<?php
if(isset($_GET['name'])){
    setcookie($_GET['name'], "", time() - 3600);
}
$days = $_POST['days'] ?? "";
if ($days === "") {
    $days = 0;
} elseif (!is_numeric($days)) {
    exit("The number of days must be a number!");
}
$hours = $_POST['hours'] ?? "";
if ($hours === "") {
    $hours = 0;
} elseif (!is_numeric($hours)) {
    exit("The number of hours must be a number!");
}
$minutes = $_POST['minutes'] ?? "";
if ($minutes === "") {
    $minutes = 0;
} elseif (!is_numeric($minutes)) {
    exit("The number of minutes must be a number!");
}
$seconds = $_POST['seconds'] ?? "";
if ($seconds === "") {
    $seconds = 0;
} elseif (!is_numeric($seconds)) {
    exit("The number of seconds must be a number!");
}
const SECONDS_IN_DAY = 60 * 60 * 24;
const SECONDS_IN_HOUR = 60 * 60;
const SECONDS_IN_MINUTE = 60;

$expire_date = time()
    + $days * SECONDS_IN_DAY
    + $hours * SECONDS_IN_HOUR
    + $minutes * SECONDS_IN_HOUR
    + $seconds;
if(isset($_POST['name']) && isset($_POST['value'])) {
   $cookie_name = $_POST['name'];
   $cookie_value = $_POST['value'];
   if (setcookie($cookie_name, $cookie_value, $expire_date)) {
      echo "Cookie successfully set.";
   }
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Lab6</title>
    </head>

    <body>
        <form method="POST"> Name:
            <br>
            <input type="text" name="name" required />
            <br> Value:
            <br>
            <input type="text" name="value" required />
            <br> Cookie expiration time:
            <br> Days:
            <br>
            <input type="text" name="days" />
            <br> Hours:
            <br>
            <input type="text" name="hours" />
            <br> Minutes:
            <br>
            <input type="text" name="minutes" />
            <br> Seconds:
            <br>
            <input type="text" name="seconds" />
            <br>
            <input name="submit" type="submit" name="button_add" value="Add cookie" /> </form>
        <form method="POST" action="viewcookie.php">
            <input name="viewcookie" type="submit" name="button_add" value="View list of cookie" /> </form>
    </body>

    </html>
