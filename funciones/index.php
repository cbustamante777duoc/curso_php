<?php

function mostrarNombre() {
    echo "cristian";
}

//invocar funcion
mostrarNombre();
echo "<br>";
function tabla($numero) {
    for ($index = 1; $index <12; $index++) {
        $operacion = $numero * $index;
        echo "$numero * $index = $operacion"."<br>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
    
} else {
    echo "<h1>debe contener algun numero</h1>";
}

