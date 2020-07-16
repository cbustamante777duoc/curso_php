<?php
//dos manera de crear los arrays
$peliculas = array('batman','superman','spiderman');
$colores = ['rojo','azul','negro'];

//array asociativo
$thinks = array(
  'nombre'=> 'cristian',
   'direcion' => 'micasa',
    'web'=> 'miportafolio'
);

echo "<br>";
echo "listado de peliculas";

for ($index = 0; $index < count($colores); $index++) {
    echo"<li>".$colores[$index]."</li>";
}

echo "<br>";
echo "listado de peliculas";
//recorrer con foreach
foreach ($peliculas as $pelicula) {
    echo"<li>".$pelicula."</li>";

}

echo "<br>";
echo "listado de cosas";
//recorrer con foreach
foreach ($thinks as $think) {
    echo"<li>".$think."</li>";

}

$contatos = array (
  array(
        'nombre' => 'Cristian',
        'telefono' => '1111'
    ),
    array(
        'nombre' => 'millie',
        'telefono' => '2222'
    ),
    array(
        'nombre' => 'Jennie',
        'telefono' => '3333'
    ),
);
echo "<br>";
echo "contactos";
echo "<br>";
echo "nombre".$contatos[2]['nombre'];

echo "<br>";
echo "listado de contactos";
foreach ($contatos as $key => $contato) {
    echo"<li>" . $contato['nombre']." ".$contato['telefono'] . "</li>";
}

