<?php

function scoresum($score1, $score2, $score3){
    $sum = $score1 + $score2 + $score3;
    if ($sum > 210){
        echo "合計点は".$sum."なので合格です";
    }else {
        echo "合計点は".$sum."なので不合格です";
    }
}

echo scoresum(100, 10, 100);
