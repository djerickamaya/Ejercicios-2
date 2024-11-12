<?php

function sumaNumPares($suma)
{
    $sumaNumPares = 0;    //Declaramos la variable que acumulará la suma de los números pares

    for ($i = 0; $i < count($suma); $i++) {     //Recorre el array usando count para saber la longitud 

        if ($suma[$i] % 2 == 0) {               //Valida si el valor es par para entrar y sumar
            $sumaNumPares += $suma[$i];     //Acumula el valor si es par
        }
    }

    return $sumaNumPares;
}

$numEnteros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15, 16, 17, 18, 19];
$sumaPares = sumaNumPares($numEnteros);

print_r($sumaPares);
