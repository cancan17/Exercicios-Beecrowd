<?php
$f = [];
$par = [];
$impar = [];
$n = intval(fgets(STDIN));

while($n > 0){
    $i = intval(fgets(STDIN));
    if($i % 2 == 0){
        array_push($par, $i);
    } else {
        array_push($impar, $i);
    }
    $n -= 1;
}

sort($par);
rsort($impar);
foreach($par as $i){
    array_push($f, $i);
}
foreach($impar as $i){
    array_push($f, $i);
}

foreach($f as $i){
    echo $i . "\n";
}
?>
