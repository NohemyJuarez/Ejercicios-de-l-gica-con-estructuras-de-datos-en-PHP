<?php

// Función para invertir el orden de los elementos en un array
function invertirLista($array) {
    // Utiliza la función array_reverse para invertir el array
    return array_reverse($array);
}

// Definir un array de números para invertir
$numeros = [1, 2, 3, 4, 5, 6];

// Llamar a la función para invertir el array y almacenar el resultado en $listaInvertida
$listaInvertida = invertirLista($numeros);

// Mostrar el título de la tabla en HTML
echo "<h2>Lista Invertida</h2>";

// Crear una tabla HTML para mostrar el índice y valor de cada elemento en la lista invertida
echo "<table border='1' cellpadding='5' style='width: 50%; background-color: #f9f9f9;'>";
echo "<tr><th>Índice</th><th>Valor</th></tr>"; // Encabezado de la tabla

// Recorrer la lista invertida y mostrar cada índice y valor en una fila de la tabla
foreach ($listaInvertida as $indice => $valor) {
    echo "<tr><td>$indice</td><td>$valor</td></tr>";
}

echo "</table>";
?>
