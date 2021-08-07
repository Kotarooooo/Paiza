<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $correct = 0;
    $incorrect = 0;
    $string = trim(fgets(STDIN));
    $number = trim(fgets(STDIN));
    $answerResultList = str_split($string);
    
    foreach ($answerResultList as $answerResult) {
        if ($answerResult == "R") {
            $correct = $correct + 1;
        } else {
            $incorrect = $incorrect + 1;
        }
    }
    if ($number <= $correct) {
        echo "Yes";
    } else {
        echo "No";
    }
?>