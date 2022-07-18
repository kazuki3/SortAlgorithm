<?php
    $array = [80, 41, 35, 90, 40, 20];

    $length = count($array);
    for ($i=0;$i<$length-1;$i++){
        for ($j=$length-1;$j>$i;$j--){
            if ($array[$j]<$array[$j-1]){
                $t=$array[$j];
                $array[$j] = $array[$j-1];
                $array[$j-1]=$t;
            }
        }
    }

    foreach ($array as $num) {
        echo "$num ";
    }
    echo "\n";