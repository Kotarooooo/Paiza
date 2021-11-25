<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$circleXCood, $circleYCood, $half1, $half2] = explode(" ", trim(fgets(STDIN)));
    $num = trim(fgets(STDIN));
    $diameter1 = $half1 **2;
    $diameter2 = $half2 **2;
    for ($i = 0; $i < $num; $i++) {
        [$xCood, $yCood] = explode(" ", trim(fgets(STDIN)));
        $conditionalExpression = ($xCood - $circleXCood) **2 + ($yCood - $circleYCood) **2;
        if ($diameter1 <= $conditionalExpression && $conditionalExpression <= $diameter2) {
            echo "yes". "\n";
        } else {
            echo "no", "\n";
        }
        
    }

?>