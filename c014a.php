<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$boxes, $radius] = explode(" ", trim(fgets(STDIN)));
    $diameter = $radius * 2;
    for ($i = 0; $i < $boxes; $i++) {
        $dates = explode(" ", trim(fgets(STDIN)));
        if ($diameter <= min($dates)) {
            echo $i + 1 ."\n";
        }
    }
?>