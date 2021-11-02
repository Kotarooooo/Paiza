<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $logRecord = trim(fgets(STDIN));
    $total = 0;
    $stoppedFloor[] = 1;
    for ($i = 0; $i < $logRecord; $i++) {
        $stoppedFloor[] = trim(fgets(STDIN));
        $movedNumValue = $stoppedFloor[$i] - $stoppedFloor[$i + 1];
        $positiveInteger = abs($movedNumValue);
        $total = $positiveInteger + $total;
    }
    echo $total;
?>