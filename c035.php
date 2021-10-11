<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $totalPass = 0;
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
        [$subject, $englishScore, $mathScore, $scienceScore, $japaneseScore, $societyScore]  = explode(" ", trim(fgets(STDIN)));
        $total = $englishScore + $mathScore + $scienceScore + $japaneseScore + $societyScore;
        $science = $mathScore + $scienceScore;
        $humanities = $japaneseScore + $societyScore;
        if ($total < 350) {
            continue;
        }
        if ($subject == "s" && $science < 160) {
            continue;
        }
        if ($subject == "l" && $humanities < 160) {
            continue;
        } else {
            $totalPass = $totalPass + 1;
        }
    }
    echo $totalPass;
?>