<?php


//si todo sale bien
if (isset($_GET['numero1']) && isset( $_GET['numero2'])) {
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "suma:".($numero1+$numero2)."<br>";
echo "multiplicacion:".($numero1-$numero2)."<br>";
echo "division:".($numero1/$numero2)."<br>"; 
} else {
    echo "<h1>introduce correctamente los valores por la url</h1>";
    
}
//index.php?numero1=10&numero2=20




