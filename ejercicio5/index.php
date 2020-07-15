<?php

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    if ($numero1 < $numero2) {
        for ($index = $numero1; $index <= $numero2; $index++) {
            echo "<h4>$index</h4>";
        }
    } else {
        echo "<h1>numero1 debe ser mayor a numero2</h1>";    
    }
} else {
    echo "<h1>los parametros get no existe</h1>";
    
}


