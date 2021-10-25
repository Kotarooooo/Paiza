<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $notincluded = 0;
    $number = trim(fgets(STDIN));
    $focusString = trim(fgets(STDIN));
    for ($i = 0; $i < $number; $i++) {
        $logRecording = trim(fgets(STDIN));
        if (strpos($logRecording,$focusString) === false) {
            $notincluded = $notincluded + 1;
        } else {
            echo $logRecording ."\n";
        }
    }
    if ($notincluded == $number) {
        echo "None";
    }
?>