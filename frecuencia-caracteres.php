<?php

// Función para calcular la frecuencia de caracteres en una cadena
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
$texto = "Hola Mundo!!";

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
