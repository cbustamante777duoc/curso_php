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
   
   $cadena_texto = "";
   if ($negrita) {
       $cadena_texto.= "<h1>";
       
   }
   $cadena_texto.= "Suma:".$suma."<br>";
   $cadena_texto.= "resta:".$resta."<br>";
   $cadena_texto.= "division:".$division."<br>";
   $cadena_texto.= "multiplicacion:".$multiplcacion."<br>";
   
   if ($negrita) {
       $cadena_texto.= "</h1>";
       
   }
   
   return $cadena_texto;
}

echo Calculadora($_GET['numero1'], $_GET['numero2'], $_GET['negrita']);

//index.php?numero1=20&numero2=3&negrita=true

function DevuelveNombre($nombre, $apellidos) {
    $texto = "";
    $texto.= "nombre= $nombre";
    $texto.="<br>";
    $texto.= "apelllido= $apellidos";
    return $texto;
}


echo DevuelveNombre("cristian","bustamante");
