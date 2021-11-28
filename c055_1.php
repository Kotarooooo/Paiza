<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $num = trim(fgets(STDIN));
    $focusString = trim(fgets(STDIN));
    $notInclude = 0;
     for ($i = 0; $i < $num; $i++) {
        $logString = trim(fgets(STDIN));
            // var_dump($focusString);
        if (strpos($logString, $focusString) !== false) {
            echo $logString . "\n";
        } else {
            $notInclude = $notInclude + 1;
          }
    }
    if ($num == $notInclude) {
        echo "None";
    }
    //デバックの手順
    //1,取得した値が全部予想通りになっているか
    //2,処理が予想通りに動いているか
    
    
?>