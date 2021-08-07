<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $string1 = trim(fgets(STDIN));
    $string2 = trim(fgets(STDIN));
    $answer = judge($string1, $string2);
    echo $answer;
    function judge($string1, $string2)
    {
        $stringNumber1 = strlen($string1);
        $stringNumber2 = strlen($string2);
        if ($stringNumber1 == $stringNumber2) return "Yes";
        return "No";
    }
?>