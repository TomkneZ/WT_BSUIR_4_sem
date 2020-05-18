<?php
  session_start();
  $number_1 = rand(1, 30);
  $number_2 = rand(1, 30);
  $_SESSION['rand_code'] = md5($number_1 + $number_2);
  $image = imagecreatetruecolor(200, 60);
  $color = imagecolorallocate($image, 200, 100, 90);
  $white = imagecolorallocate($image, 255, 255, 255);
  imagefilledrectangle($image, 0, 0, 399, 99, $white);
  imagettftext ($image, 30, 0, 10, 40, $color, 'D:\OpenServer\OSPanel\domains\Lab4.ru\10150.ttf', "$number_1 + $number_2");
  header("Content-type: image/png");
  imagepng($image);
  imagedestroy($image);
