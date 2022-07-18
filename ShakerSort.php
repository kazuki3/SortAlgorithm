<?php
    $array = [3, 5, 6, 9, 2, 7, 8, 10, 4];
    $length = count($array);

    $left = 0;
    $right = $length - 1;

    while ($left < $right) {
        for ($i = $left;$i<$right;$i++) {
            if ($array[$i] > $array[$i + 1]) {
                $t = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $t;
                $shift = $i;
            }
        }
        $right = $shift;
        for ($i = $right;$i>$left;$i--) {
            if ($array[$i] < $array[$i - 1]) {
                $t = $array[$i];
                $array[$i] = $array[$i - 1];
                $array[$i - 1] = $t;
                $shift = $i;
            }
        }
        $left = $shift;
    }

    foreach ($array as $num) {
        echo "$num ";
    }
    echo "\n";