<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $r = 0;
    $w = 0;
    $result = trim(fgets(STDIN));
    $arrangement = str_split($result);
    $number = trim(fgets(STDIN));
    //var_dump($arrangement);
    foreach ($arrangement as $a) {
        //echo $a;
        if ($a == "R"){
            $r = $r + 1;
        }else{
            $w = $w + 1;
        }
    }
    if ($number <= $r){
        echo "Yes";
    }else{
        echo "No";
    }
?>