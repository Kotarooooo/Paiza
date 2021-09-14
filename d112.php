<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $products = trim(fgets(STDIN));
    $operatingTime = trim(fgets(STDIN));
    $produceProducts = $products * $operatingTime;
    echo $produceProducts;
?>