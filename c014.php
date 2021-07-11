<?php
    // 自分の得意な言語で
    // Let’s チャレンジ！！
    [$num, $half] = explode(" ", trim(fgets(STDIN)));
    $diameter = $half * 2;
      for ($i = 0; $i < $num; $i++) {
        $date = explode(" ", trim(fgets(STDIN)));
          if ($diameter <= max($date) && $diameter <= min($date)) {
            echo $i + 1 ."\n";
          }
      }
//確認
?>