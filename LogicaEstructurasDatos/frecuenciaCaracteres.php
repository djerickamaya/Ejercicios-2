<?php
function frecuenciaCaracteres($cadena)
{
    $frecuencia = [];

    for ($i = 0; $i < strlen($cadena); $i++) {    // Recorrer cada carácter de la cadena usando strlen para conocer la longitud de la cadena

        $caracter = $cadena[$i];

        if (isset($frecuencia[$caracter])) {        // Valida si  una variable está definida o es null para proceder a contarlo e incrementar la frecuencia
            $frecuencia[$caracter]++;
        } else {

            $frecuencia[$caracter] = 1;            // Si el ISSET es false, procede a definir e inicializar la variable $frecuencia en 1
        }
    }

    return $frecuencia;
}

$cadena = "esternocleidomastoideo ";
$frecuencia = frecuenciaCaracteres($cadena);

print_r($frecuencia);
