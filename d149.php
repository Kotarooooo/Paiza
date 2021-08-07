<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $string = trim(fgets(STDIN));
    $arrangement = str_split($string);
    $number = trim(fgets(STDIN));
    unset($arrangement[$number - 1]);
    $anserString = (implode($arrangement));
    echo $anserString;
?>