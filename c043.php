<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $useNumber = trim(fgets(STDIN));
    //課金している人数を取得
    $users = explode(" ", trim(fgets(STDIN)));
    //課金をしているプレイヤーIDを配列で取得
    $count = array_count_values($users);
    //関数を利用して要素の数を数える
    $key = array_keys($count, max($count));
    //値が大きい値を$keyに代入
    sort($key);
    //昇順に。
    $string = implode(" ", $key);
    //文字列に変換
    echo $string;
?>