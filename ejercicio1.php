<?php

function contarVocales($palabra) {

    // 1. Pasar todo a minúsculas
    $palabra = strtolower($palabra);

    // 2. Contador empieza en 0
    $contador = 0;

    // 3. Recorrer letra por letra
    for ($i = 0; $i < strlen($palabra); $i++) {
        $letra = $palabra[$i];

        // 4. ¿Es vocal?
        if ($letra == "a" || $letra == "e" ||
            $letra == "i" || $letra == "o" ||
            $letra == "u") {
            $contador++;
        }
    }

    // 5. Devolver el resultado
    return $contador;
}

// --- Uso ---
$palabra = "Murcielago";
$resultado = contarVocales($palabra);

echo "La palabra \"$palabra\" tiene $resultado vocales";
?>