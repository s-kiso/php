<?php

$a = 5;

if ($a == 5) {
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
};

for ($i = 0; $i < 4; $i++) {
    echo $i;
}

echo "<br />";

for ($i = 1; $i <= 5; $i++){
    echo $i*2;
}

echo "<br />";

$i = 1;
while ($i<=20) {
    echo $i++."<br />";
}

$count = 1;
while ($count<20) {
    if ($count % 3 == 0) {
        $count++;
    }else{
    echo $count;
    echo "<br />";
    $count++;}
}

$i = 1;
while ($i<=50) {
    if ($i % 3 == 0) {
        if ($i % 5 == 0){
            echo "FizzBuzz";
        }else {
            echo "Fizz";
        }
    }elseif ($i % 5 == 0) {
        echo "Buzz";
    }else {
        echo $i;
    }
    echo "<br />";
    $i++;
}