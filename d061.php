<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $chokolate = trim(fgets(STDIN));
    $chokolates = calculateChokolate($chokolate);
      echo $chokolates;
    function calculateChokolate($chokolate){
        if ($chokolate < 1) {return 1;
          return $chokolate * 3;
        }  
    }
?>