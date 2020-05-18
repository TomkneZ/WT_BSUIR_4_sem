<!DOCTYPE HTML>
<html>

<head> </head>

<body>
    <form method="post"> Enter the number of records to retrieve:
        <br>
        <input type="text" name="count" required>
        <br>
        <input type="submit"> </form>
</body>

</html>
<?php
    require_once 'connection.php';
    if (isset($_POST['count'])) {
        if (intval($_POST['count']) > 0) {
            $MySQL = mysqli_connect($localhost, $user, $password, $database);
            if (!$MySQL) {
                echo 'Error: Unable to connect to MySQL.'.PHP_EOL;
                echo 'Debugging errno: '.mysqli_connect_errno().PHP_EOL;
                echo 'Debugging error: '.mysqli_connect_error().PHP_EOL;
                exit;
            }
            $SQL = 'SELECT DISTINCT `name`, `id` FROM `records` ORDER BY RAND() LIMIT '.intval($_POST['count']);
            $request = mysqli_query($MySQL, $SQL);
            while ($data = mysqli_fetch_assoc($request)) {
                echo 'id: '.$data['id'].' name:  '.$data['name'].'<br>';
            }
            mysqli_close($MySQL);
        } else {
            echo 'You need > 0 nums';
        }
    }
