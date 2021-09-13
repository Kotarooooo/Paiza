<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $remainingBattery = trim(fgets(STDIN));
    $completiontimes = 100 - $remainingBattery;
    echo $completiontimes;
?>