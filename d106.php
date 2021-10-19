<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $number = trim(fgets(STDIN));
    $divideNumber = trim(fgets(STDIN));
    $surplusNumber = $number % $divideNumber;
    echo $surplusNumber;
?>