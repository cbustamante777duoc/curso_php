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
echo "///////////////////////////////////////"."<br>";

function Calculadora($num, $num2, $negrita=false) {
   $suma = $num + $num2;
   $resta = $num - $num2;
   $multiplcacion = $num*$num2;
   $division = $num/$num2;
   
   if ($negrita) {
       echo "<h1>";
       
   }
   echo "Suma:".$suma."<br>";
   echo "resta:".$resta."<br>";
   echo "division:".$division."<br>";
   echo "multiplicacion:".$multiplcacion."<br>";
   
   if ($negrita) {
       echo "</h1>";
       
   }
}

Calculadora($_GET['numero1'], $_GET['numero2'], $_GET['negrita']);

//index.php?numero1=20&numero2=3&negrita=true