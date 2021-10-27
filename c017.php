<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$parentCard1, $parentCard2] = explode(" ", trim(fgets(STDIN)));
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
        [$childCard1, $childCard2] = explode(" ", trim(fgets(STDIN)));
        if ($parentCard1 < $childCard1) {
            echo "Low" ."\n";
        }
        if ($parentCard1 > $childCard1) {
            echo "High" ."\n";
        }
        if ($parentCard1 == $childCard1 && $parentCard2 < $childCard2) {
            echo "High" ."\n";
        }
        if ($parentCard1 == $childCard1 && $parentCard2 > $childCard2) {
            echo "Low" ."\n";
        }
    }
?>