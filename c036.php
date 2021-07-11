<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$p_1, $p_2] = explode(" ", trim(fgets(STDIN)));
    [$p_3, $p_4] = explode(" ", trim(fgets(STDIN)));
    $first_round = explode(" ", trim(fgets(STDIN)));
    if ($first_round[$p_1 - 1] < $first_round[$p_2 - 1]){
        $firstWinner1 = $p_1;
    }else{
        $firstWinner1 = $p_2;
     }
    if ($first_round[$p_3 -1] < $first_round[$p_4 - 1]){
        $firstWinner2 = $p_3;
    }else{
        $firstWinner2 = $p_4;
    }
    $finalRound = explode(" ", trim(fgets(STDIN)));
    if ($firstWinner1 < $firstWinner2) {
        if ($finalRound[0] < $finalRound[1]) {
            echo $firstWinner1 ."\n";
            echo $firstWinner2;
        }else{
            echo $firstWinner2. "\n";
            echo $firstWinner1;
        }
    }else {
        if($finalRound[0] < $finalRound[1]) {
            echo $firstWinner2 ."\n";
            echo $firstWinner1;
        }else {
            echo $firstWinner1 ."\n";
            echo $firstWinner2;
        }
    }
    
    
?>