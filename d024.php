<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $angle1 = trim(fgets(STDIN));
    $angle2 = trim(fgets(STDIN));
    $remainingAngle = 180 - ($angle1 + $angle2);
    echo $remainingAngle;
?>