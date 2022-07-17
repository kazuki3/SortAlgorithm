<?php
    $array = [80, 50, 56, 30, 51, 70];

    $length = count($array);
    for ($i=0;$i<$length;$i++) {
        $current = $array[$i];
        $min = $array[$i];
        $min_index = $i;

        for ($j=$i+1;$j<$length;$j++) {
            if ($array[$j] < $min) { // ここの条件式切り替えで降順へ変更可能。
                $min = $array[$j];
                $min_index = $j;
            }
        }

        $array[$i] = $array[$min_index];
        $array[$min_index] = $current;
    }

    foreach ($array as $num) {
        echo "$num ";
    }
    echo "\n";