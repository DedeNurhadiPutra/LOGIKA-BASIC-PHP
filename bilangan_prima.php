<?php

for ($i = 2; $i <= 100; $i++) {

    $isPrima = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $isPrima = false;
            echo $i . "  BUKAN BILANGAN PRIMA <br/>";
            break;
        }
    }

    if ($isPrima == true) {
        echo $i . " BILANGAN PRIMA <br/>";
    }
}
