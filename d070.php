<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    [$totalPages, $finishedPages]= explode(" ", trim(fgets(STDIN)));
    $remainingPages = $totalPages - $finishedPages;
    echo $remainingPages;
?>