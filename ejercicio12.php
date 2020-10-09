<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Kelya
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Kelya
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos animales.</p>


<?php

$ani = rand(0,3);

  $animales = ["0"=>"ballena.svg", "1"=>"caballito-mar.svg", "2"=>"camello.svg", "3"=>"cebra.svg", "4"=>"elefante.svg", "5"=>"hipopotamo.svg", "6"=>"jirafa.svg"];
  $animal = $animales["0"];
  print "<p>El animal es $animales[$ani]</p>";
  print "<p>El animal es $animal</p>";

  print "<img src='img/animales/$animales[$ani]'>";
  print "<img src='img/animales/$animal'>";

?>


  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
