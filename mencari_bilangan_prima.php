<?php
$isPrima = false;

for ($i = 2; $i <= 100; $i++) {

    //echo "(i = 2; i < 100) ----> (" . $i . " = 2;" . $i . " <  100 ) <br/>";

    $isPrima = true;

    for ($j = 2; $j < $i; $j++) {

        // echo "(j = 2; j < i) ----> (" . $j . " = 2;" . $j . " < " . $i . ")<br/>";

        //echo "i MOD j ----> (" . $i . " % " . $j, ") = " . ($i % $j) . "<br/>";
        if ($i % $j == 0) {
            $isPrima = false;
            // echo $i . " BUKAN BILANGAN PRIMA <br/>";
            break;
        }
    }

    if ($isPrima) {
        echo $i . " BILANGAN PRIMA <br/>";
    }
}
