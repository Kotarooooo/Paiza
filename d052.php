<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $necessaryNumber = trim(fgets(STDIN));
    for ($i = 1; $i <= $necessaryNumber; $i++) {
        $arrangement[] = $i;
        $total = array_sum($arrangement);
    }
    echo $total;
?>