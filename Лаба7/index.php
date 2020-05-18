<?php
session_start();
if(isset($_POST['submit'])){
    if (($_POST['captcha'] != '') && md5(($_POST['captcha']) === $_SESSION['rand_code'])){
       $mail = $_POST['email'];
                $theme = $_POST['theme'];
                $message = $_POST['message'];
                if (mail($mail, $theme, $message)) {
                    echo 'Mail was sent seccessfully.';
                }
    } else {
        echo 'Wrong captcha!';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laba 7</title>
</head>
<body>
  <form method="post">
    <fieldset>
        <legend>Send message:</legend>
        Theme:<br>
        <input type="text" name="theme" required><br>
        E-mail:<br>
        <input type="email" name="email" required><br>
        Message:<br>
        <textarea rows="10" cols="45" name="message" required></textarea><br>
        Verify sending:<br>
        <img src="captcha.php" alt="" /><input type="text" name="captcha" required><br>
        <input type="submit" name="submit" value="Send">
    </fieldset>
  </form>
</body>
</html>
