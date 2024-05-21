<?php
function calcular_valor_palabra($palabra) {
    $valores_letras = array(
        'Q' => 1, 'A' => 1, 'Z' => 1,
        'W' => 2, 'S' => 2, 'X' => 2,
        'E' => 3, 'D' => 3, 'C' => 3,
        'R' => 4, 'F' => 4, 'V' => 4,
        'T' => 5, 'G' => 5, 'B' => 5,
        'Y' => 6, 'H' => 6, 'N' => 6,
        'U' => 7, 'J' => 7, 'M' => 7,
        'I' => 8, 'K' => 8,
        'O' => 9, 'L' => 9,
        'P' => 0
    );

    $palabra = strtoupper($palabra);
    
    $valor_palabra = 0;

    for ($i = 0; $i < strlen($palabra); $i++) {
        $letra = $palabra[$i];

        if (array_key_exists($letra, $valores_letras)) {
            $valor_palabra += $valores_letras[$letra];
        }
    }

    return $valor_palabra;
}

$palabra = "UAM";
$valor = calcular_valor_palabra($palabra);
echo "El valor de la palabra '$palabra' es: $valor";
?>
