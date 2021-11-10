<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $totalMerchandise = trim(fgets(STDIN));
    for($i = 0; $i < $totalMerchandise; $i++) {
        $datas = explode(" ", trim(fgets(STDIN)));
        // var_dump($datas[1]);
        // die;
        if ($datas[0] == 0) {
            $foodPrice[] = $datas[1];
        }
        if ($datas[0] == 1) {
            $bookPrice[] = $datas[1];
        }
        if ($datas[0] == 2) {
            $clothingPrice[] = $datas[1];
        }
        if ($datas[0] == 3) {
            $otherPrice[] = $datas[1];
        }
    }
    // var_dump($foodPrice);
    $totalFoodPrice = array_sum($foodPrice);
    $totalBookPrice = array_sum($bookPrice);
    $totalClothingPrice = array_sum($clothingPrice);
    $totalOtherPrice = array_sum($otherPrice);
    $runcateFoodPrice = (floor(($totalFoodPrice)/100)*100);
    $runcateBookPrice = (floor(($totalBookPrice)/100)*100);
    $runcateClothingPrice = (floor(($totalClothingPrice)/100)*100);
    $runcateOtherPrice = (floor(($totalOtherPrice)/100)*100);
    $earnFoodPoint = $runcateFoodPrice * 0.05;
    $earnBookPoint = $runcateBookPrice * 0.03;
    $earnClothingPoint = $runcateClothingPrice * 0.02;
    $earnOtherPoint = $runcateOtherPrice * 0.01;
    $allPoint = $earnFoodPoint + $earnBookPoint + $earnClothingPoint + $earnOtherPoint;
    echo $allPoint;
?>