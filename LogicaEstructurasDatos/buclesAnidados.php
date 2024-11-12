<?php
function ImpPiramide($filas)
{
    for ($i = 1; $i <= $filas; $i++) {  //Controla el salto de linea según las filas que se ingresen

        for ($j = $filas - $i; $j > 0; $j--) {    // Imprimir espacios en blanco de la fila
            echo " ";
        }

        for ($k = 0; $k < (2 * $i - 1); $k++) {   // Imprimir asteriscos de la fila

            echo "*";
        }

        echo "\n";   // Hace el salto a la nueva línea después de cada fila
    }
}

$filas = 10; // Cambia este valor para ajustar el tamaño de la pirámide

ImpPiramide($filas);
