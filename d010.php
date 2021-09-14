<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $localPart = trim(fgets(STDIN));
    $domainPart = trim(fgets(STDIN));
    echo $localPart. "@". $domainPart;
?>