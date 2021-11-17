<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $totalMerchandise = trim(fgets(STDIN));
    for($i = 0; $i < $totalMerchandise; $i++) {
        [$kindNumber, $price] = explode(" ", trim(fgets(STDIN)));
        if ($kindNumber == 0) {
            $foodPrice[] = $price;
        }
        if ($kindNumber == 1) {
            $bookPrice[] = $price;
        }
        if ($kindNumber == 2) {
            $clothingPrice[] = $price;
        }
        if ($kindNumber == 3) {
            $otherPrice[] = $price;
        }
    }
    $totalFoodPrice = array_sum($foodPrice);
    $totalBookPrice = array_sum($bookPrice);
    $totalClothingPrice = array_sum($clothingPrice);
    $totalOtherPrice = array_sum($otherPrice);
    $getFoodPoint = (floor(($totalFoodPrice) / 100) * 100 * 0.05);
    $getBookPoint = (floor(($totalBookPrice) / 100) * 100 * 0.03);
    $getClothingPoint = (floor(($totalClothingPrice) / 100) * 100 * 0.02);
    $getOtherPoint = (floor(($totalOtherPrice) / 100) * 100 * 0.01);
    $totalPoint = $getFoodPoint + $getBookPoint + $getClothingPoint + $getOtherPoint;
    echo $totalPoint;
    

?>