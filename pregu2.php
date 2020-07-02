<?php
$valor = 6;
$primo = 0;
 
for ($b = 1; $b < $valor; $b++) {
    if ($valor % $b == 0) {
        $primo++;
    }
}
 
if ($primo >= 2) {
    echo "No es primo";
} else {
    echo "Es primo";
}