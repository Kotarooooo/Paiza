<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$atk, $def, $agi] = explode(" ", trim(fgets(STDIN)));
    $monsters = trim(fgets(STDIN));
    $noInclude = 0;
    for ($i = 0; $i < $monsters; $i++) {
        [$name, $minAtk, $maxAtk, $minDef, $maxDef, $minAgi, $maxAgi] = explode(" ", trim(fgets(STDIN)));
        if ($minAtk <= $atk && $atk <= $maxAtk && 
            $minDef <= $def && $def <= $maxDef && 
            $minAgi <= $agi && $agi <= $maxAgi) {
            echo $name. "\n";
        } else {
            $noInclude = $noInclude + 1;
        }
    }
    if ($noInclude == $monsters) {
        echo "no evolution";
    }
?>