<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $quantity = trim(fgets(STDIN));
    for ($i = 0; $i < $quantity; $i++) {
        $hand = trim(fgets(STDIN));
        $splitedHand = str_split($hand);
        $count = array_count_values($splitedHand);
        if (max($count) == 4) {
            echo "Four Card" ."\n";
        }
        if (max($count) == 3) {
            echo "Three Card" ."\n";
        }
        if (max($count) == 2 && count($count) == 2) {
            echo "Two Pair" ."\n";
        }
        if (max($count) == 2 && count($count) == 3) {
            echo "One Pair" ."\n";
        }
        if (count($count) == 4) {
            echo "No Pair" ."\n";
        }
    }
?>