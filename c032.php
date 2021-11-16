<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $totalMerchandise = trim(fgets(STDIN));
    for($i = 0; $i < $totalMerchandise; $i++) {
        [$kindsNumber, $price] = explode(" ", trim(fgets(STDIN)));
        if ($kindsNumber == 0) {
            $foodPrice[] = $price;
        }
        if ($kindsNumber == 1) {
            $bookPrice[] = $price;
        }
        if ($kindsNumber == 2) {
            $clothingPrice[] = $price;
        }
        if ($kindsNumber == 3) {
            $otherPrice[] = $price;
        }
    }
    $totalFoodPrice = array_sum($foodPrice);
    $totalBookPrice = array_sum($bookPrice);
    $totalClothingPrice = array_sum($clothingPrice);
    $totalOtherPrice = array_sum($otherPrice);
    $runcateFoodPrice = (floor(($totalFoodPrice) / 100) * 100 * 0.05);
    $runcateBookPrice = (floor(($totalBookPrice) / 100) * 100 * 0.03);
    $runcateClothingPrice = (floor(($totalClothingPrice) / 100) * 100 * 0.02);
    $runcateOtherPrice = (floor(($totalOtherPrice) / 100) * 100 * 0.01);
    $totalPoint = $runcateFoodPrice + $runcateBookPrice + $runcateClothingPrice + $runcateOtherPrice;
    echo $totalPoint;
?>