<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $outsideCount = 0;
    for ($i = 0; $i < 7; $i++) {
        $rainyPercent = trim(fgets(STDIN));
        if (checkRainyPercent($rainyPercent)) {
            $outsideCount++;
        }
    }
    echo $outsideCount;
    
    function checkRainyPercent($rainyPercent) 
    {
        return $rainyPercent <= 30;
    }
?>