<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$constructionXCoordinate, $constructionYCoordinate, $noiseLevel] = explode(" ", trim(fgets(STDIN)));
    //左の変数から工場現場のx座標、y座標、騒音の大きさ
    $shadeQuantity = trim(fgets(STDIN));
    //木陰の数
    $constructionRange = $noiseLevel **2;
    //騒音の大きさを2乗して新しい変数に代入
    for ($i = 0; $i < $shadeQuantity; $i++) {
        [$xCoordinate, $yCoordinate] = explode(" ", trim(fgets(STDIN)));
        //左からx座標、y座標
        $conditionsFormula = ($constructionXCoordinate - $xCoordinate) **2 + ($constructionYCoordinate - $yCoordinate) **2;
        //paizaの問題文に記載されていた条件式を参考
        if ($constructionRange < $conditionsFormula) {
            echo "silent" ."\n";
        }
        if ($conditionsFormula <= $constructionRange) {
            echo "noisy" ."\n";
        }
    }
?>