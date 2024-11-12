<?php

// Función para sumar solo los números pares en un array
function sumaPares($array) {
    $suma = 0; // Inicializar la suma en 0

    // Recorrer cada número en el array
    foreach ($array as $numero) {
        // Verificar si el número es par
        if ($numero % 2 == 0) {
            // Si es par, sumarlo a la variable $suma
            $suma += $numero;
        }
    }
    
    // Retornar el resultado de la suma de los números pares
    return $suma;
}

// Definir un array de números
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Llamar a la función para obtener la suma de los números pares
$resultadoSuma = sumaPares($numeros);

// Mostrar el título en HTML
echo "<h2>Suma de Números Pares</h2>";

// Contenedor para mostrar el resultado
echo "<div style='padding: 10px; background-color: #d9edf7; border: 1px solid #bce8f1; width: 50%;'>";

// Mostrar el array de números
echo "<p>Array de números: " . implode(", ", $numeros) . "</p>";

// Mostrar el resultado de la suma de los números pares
echo "<p><strong>Suma de números pares:</strong> $resultadoSuma</p>";

echo "</div>";
?>

