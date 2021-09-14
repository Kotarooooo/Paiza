<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $players = trim(fgets(STDIN));
    $competeNumber = $players * ($players - 1) / 2;
    echo $competeNumber;
?>