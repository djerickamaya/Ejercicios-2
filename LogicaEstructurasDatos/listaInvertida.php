<?php
function invertir($lista)
{
    $listaInvertida = [];  //Array que guardara la lista invertida

    for ($i = count($lista) - 1; $i >= 0; $i--) {  //Recorre el array origen de atras hacia adelante 
        $listaInvertida[] = $lista[$i];            //Guarda cada valor en el array invertido
    }

    return $listaInvertida;
}

$listaOrigen = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$listaInvertida = invertir($listaOrigen);

print("Lista Origen \n");
print_r($listaOrigen);
print("Lista Invertida \n");
print_r($listaInvertida);
