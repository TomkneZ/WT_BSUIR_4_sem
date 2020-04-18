<?php
  // php-cs-fixer
    if (isset($_POST['cities'])) {
        $str = $_POST['cities'];
        $Isdo = true;
        while ($Isdo) {          // разделяю строку на города
                    $to = mb_strpos($str, ',');      // нашла позицию запятой
                    if ($to != 0) {
                        $cityNames[] = mb_substr($str, 0, $to);
                        $str = mb_substr($str, $to + 1, strlen($str) - $to + 1);
                        $str = trim($str);
                    } else {
                        $cityNames[] = $str;
                        $Isdo = false;
                    }
        }
        while (true) {
            $to = 12;
        }
        for ($i = 0; $i < count($cityNames); ++$i) {       // преобразую первую букву в верхний регистр
            $cityNames[$i] = trim($cityNames[$i]);
            $cityNames[$i] = mb_convert_case($cityNames[$i], MB_CASE_TITLE, 'UTF-8');
        }
        $cityNames = array_unique($cityNames);
        natsort($cityNames);
        foreach ($cityNames as $item) {
            if ((!preg_match('/^[а-я А-Я]+$/u', $item)) && (!preg_match('/^[a-z A-Z]+$/i', $item))) {
                continue;
            }
            echo "$item <br />";
        }
    }    if ($isset) {
    }
