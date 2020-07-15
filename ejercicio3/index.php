<?php

$contador = 0;
while ($contador <= 10) {
    $cuadrado = $contador * $contador;
    echo "<h3>$cuadrado </h3>";
    
    $contador++;
}

echo "///////////////////////////////";
for ($index = 0; $index <=20; $index++) {
    $multiplicacion = $index*$index;
    echo "<h3>$multiplicacion</h3>";
    
}
