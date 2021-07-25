<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $rainyPercent = trim(fgets(STDIN));
    $WeatherCondition = judge($rainyPercent);
    echo $WeatherCondition;
    function judge($rainyPercent){
        if ($rainyPercent <= 30) return "sunny";
        if ($rainyPercent <= 70) return "cloudy";
        return "rainy";
        
    }
?>