<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$drinkPlan, $notDrinkPlan] = explode(" ", trim(fgets(STDIN)));
    $totalPrice = $drinkPlan * 6000 + $notDrinkPlan * 4000;
    echo $totalPrice
?>