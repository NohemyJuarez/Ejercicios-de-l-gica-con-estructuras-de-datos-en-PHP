<?php

// Imprimir una pirámide de asteriscos
function imprimirPiramide($filas) {
    // Bucle para hacer las filas de la pirámide
    for ($i = 1; $i <= $filas; $i++) {
       
        // Imprimir espacios para alinear la pirámide
        echo str_repeat("&nbsp;", $filas - $i);
        
        // Imprimir los asteriscos separados
        echo str_repeat("* ", $i);
        
        // Saltar de línea para la siguiente fila
        echo "<br>";
    }
}

// Número de filas de la pirámide
$filas = 10;

echo "<h2>Pirámide de Asteriscos</h2>";
// Contenedor con estilo para la pirámide
echo "<div style='padding: 300px; background-color: #e0f7fa; border: 1px solid #80deea; width: 50%;'>";

// Llamar a la función para imprimir la pirámide
imprimirPiramide($filas);

echo "</div>";
?>
