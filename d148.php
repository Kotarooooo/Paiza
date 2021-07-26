<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$test1, $test2] = explode(" ", trim(fgets(STDIN)));
    $necessaryScore = trim(fgets(STDIN));
    $totalScore = total($test1, $test2, $necessaryScore);
    echo $totalScore;
    function total($test1, $test2, $necessaryScore)
    {
        if ($necessaryScore <= $test1) return $test1 + $test2 ;
        return $test1;
    }
?>