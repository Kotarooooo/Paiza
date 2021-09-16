<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$aCoordinate, $bCoordinate]  = explode(" ", trim(fgets(STDIN)));
    $coordinatePosition = $aCoordinate - $bCoordinate;
    echo $coordinatePosition;
?>