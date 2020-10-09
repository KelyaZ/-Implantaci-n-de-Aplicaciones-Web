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

  <p>Actualice la página para mostrar dos nuevos colores.</p>


<?php

$aleatorio1 = rand(1,6);
$aleatorio2 = rand(1,6);
$aleatorio3 = rand(1,6);
$aleatorio4 = rand(1,6);
$aleatorio5 = rand(1,6);
$aleatorio6 = rand(1,6);
$aleatorio7 = rand(1,6);
$aleatorio8 = rand(1,6);
$aleatorio9 = rand(1,6);
$aleatorio10 = rand(1,6);

$maximo = max($aleatorio1,$aleatorio2,$aleatorio3,$aleatorio4,$aleatorio5,$aleatorio6,$aleatorio7,$aleatorio8,$aleatorio9,$aleatorio10);

print "
<img src='img/dados/$aleatorio1.svg'>
<img src='img/dados/$aleatorio2.svg'>
<img src='img/dados/$aleatorio3.svg'>
<br>
<img src='img/dados/$aleatorio4.svg'>
<img src='img/dados/$aleatorio5.svg'>
<img src='img/dados/$aleatorio6.svg'>
<br>
<img src='img/dados/$aleatorio7.svg'>
<img src='img/dados/$aleatorio8.svg'>
<img src='img/dados/$aleatorio9.svg'>
<img src='img/dados/$aleatorio10.svg'>
<br>
Valor máximo: $maximo
";


?>


  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
