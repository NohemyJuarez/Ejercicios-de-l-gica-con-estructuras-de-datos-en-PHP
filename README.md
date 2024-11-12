# Ejercicios-de-l-gica-con-estructuras-de-datos-en-PHP
// Archivo: lista-invertida.php
// Descripción: Este script PHP invierte el orden de los elementos en un array y los muestra en una tabla HTML.
// Autor: Nohemy Juarez
// Fecha: 11/11/2024

#1.  Problema de Lista Invertida

<?php

// Función para invertir el orden de los elementos en un array
/**
 * Invierte el orden de los elementos en el array proporcionado.
 *
 * @param array $array Array de entrada cuyos elementos se quieren invertir.
 * @return array Array invertido.
 */
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

// Cerrar la tabla
echo "</table>";

?>



#2. Problema de Suma de Números Pares

<?php

/**
 * Función para sumar solo los números pares en un array.
 * Recorre el array y suma los valores que son pares.
 * 
 * @param array $array Array de números a analizar.
 * @return int Suma de los números pares en el array.
 */
function sumaPares($array) {
    $suma = 0;

    // Recorrer cada número en el array
    foreach ($array as $numero) {
        // Verificar si el número es par
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    
    return $suma;
}

// Definir un array de números
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Llamar a la función para obtener la suma de los números pares
$resultadoSuma = sumaPares($numeros);

echo "<h2>Suma de Números Pares</h2>";

// Crear un contenedor HTML con estilo para mostrar el resultado
echo "<div style='padding: 10px; background-color: #d9edf7; border: 1px solid #bce8f1; width: 50%;'>";

echo "<p>Array de números: " . implode(", ", $numeros) . "</p>";
echo "<p><strong>Suma de números pares:</strong> $resultadoSuma</p>";

echo "</div>";
?>


#3. Problema de Frecuencia de Caracteres:

<?php

/**
 * Función para calcular la frecuencia de caracteres en una cadena.
 * Recorre cada carácter en la cadena y cuenta cuántas veces aparece.
 * 
 * @param string $cadena Cadena de texto a analizar.
 * @return array Array asociativo donde las claves son los caracteres
 *               y los valores son sus frecuencias.
 */
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    
    // Convertir la cadena en un array de caracteres y recorrer cada uno
    foreach (str_split($cadena) as $caracter) {
        // Si el carácter ya existe en el array de frecuencia, incrementarlo en 1
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // Si el carácter no existe, inicializar su contador en 1
            $frecuencia[$caracter] = 1;
        }
    }
    
    return $frecuencia;
}

// Definir una cadena de texto para analizar
$texto = "Hola Mundo";

// Llamar a la función para obtener la frecuencia de caracteres en el texto
$frecuencia = frecuenciaCaracteres($texto);

echo "<h2>Frecuencia de Caracteres</h2>";

// Crear la tabla HTML para mostrar los caracteres y sus frecuencias
echo "<table border='1' cellpadding='5' style='width: 50%; background-color: #f5f5f5;'>";
echo "<tr><th>Carácter</th><th>Frecuencia</th></tr>"; // Encabezado de la tabla

// Recorrer el array de frecuencias y mostrar cada carácter y su contador
foreach ($frecuencia as $caracter => $contador) {
    echo "<tr><td>$caracter</td><td>$contador</td></tr>";
}

// Cerrar la tabla
echo "</table>";
?>

#4. Problema de Bucle Anidado:

<?php

// Función para invertir el orden de los elementos en un array
function invertirLista($array) {
    return array_reverse($array);
}

$numeros = [1, 2, 3, 4, 5, 6];

$listaInvertida = invertirLista($numeros);

echo "<h2>Lista Invertida</h2>";

echo "<table border='1' cellpadding='5' style='width: 50%; background-color: #f9f9f9;'>";
echo "<tr><th>Índice</th><th>Valor</th></tr>";

foreach ($listaInvertida as $indice => $valor) {
    echo "<tr><td>$indice</td><td>$valor</td></tr>";
}

echo "</table>";
?>

