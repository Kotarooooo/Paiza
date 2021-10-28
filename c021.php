<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$circleXCoordinate, $circleYCoordinate, $radius1, $radius2] = explode(" ", trim(fgets(STDIN)));
    //左から円の中心のx座標とy座標、1つ目の半径と2つ目の半径
    $num = trim(fgets(STDIN));
    //人数
    $diameter1 = $radius1 **2;
    $diameter2 = $radius2 **2;
    //問題文の条件式を参考に半径の直径を求める
    for ($i = 0; $i < $num; $i++) {
        [$xCoordinate, $yCoordinate] = explode(" ", trim(fgets(STDIN)));
        //x座標とy座標
        $conditionalExpression = ($circleXCoordinate - $xCoordinate) **2 + ($circleYCoordinate - $yCoordinate) **2;
        //問題文の条件式を参考
        if ($diameter1 <= $conditionalExpression && $conditionalExpression <= $diameter2) {
            echo "yes" ."\n";
        } else {
            echo "no" ."\n";
        }
    }
?>