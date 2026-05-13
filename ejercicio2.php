<?php

$codigos = [
    "  prod-1234  ",
    "PROD1234",
    "PROD-12",
    "PROD-5678"
];

foreach ($codigos as $codigo) {

    // a) Limpiar
    $codigo = strtoupper(trim($codigo));

    // b) ¿Tiene guión?
    if (strpos($codigo, "-") === false) {
        echo "$codigo → falta el guión ✗\n";
        continue;
    }

    // c) Extraer dígitos (desde posición 5)
    $parte_num = substr($codigo, 5);

    // d) ¿Son exactamente 4?
    if (strlen($parte_num) === 4) {
        echo "$codigo → válido ✓\n";
    } else {
        echo "$codigo → dígitos incorrectos ✗\n";
    }
}

?>