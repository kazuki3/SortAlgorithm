<?php
    $length = 10;
    for ($i=0;$i<$length;$i++) {
        $array[$i] = rand();
    }

    for ($i=1;$i<$length;$i++) {
        for ($j=$i-1;$j>=0;$j--) {
            if ($array[$j] > $array[$j+1]) {
                $t = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $t;
            } else {
                break;
            }
        }
    }

    foreach ($array as $num) {
        echo "$num ";
    }
    echo "\n";