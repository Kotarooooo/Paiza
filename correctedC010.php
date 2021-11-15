<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$xCoordinate, $yCoordinate, $noise] = explode(" ", trim(fgets(STDIN)));
    $treeNum = trim(fgets(STDIN));
    $twiceNoise = $noise ** 2;
    for ($i = 0; $i < $treeNum; $i++) {
        [$treeXCooodinate, $treeYCoodinate] = explode(" ", trim(fgets(STDIN)));
        $conditionalExpression = ($treeXCooodinate - $xCoordinate) ** 2 + ($treeYCoodinate - $yCoordinate) **2;
        if ($twiceNoise <= $conditionalExpression) {
            echo "silent" . "\n";
        } else {
            echo "noisy" . "\n";
        }
    }
?>