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

  <table>
    <tbody>
<?php

$aleatorio1 = rand(0,255);
$aleatorio2 = rand(0,255);
$aleatorio3 = rand(0,255);

print "
<svg height='150' width='150'>
<circle cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($aleatorio1,$aleatorio2,$aleatorio3)'/>
</svg>";

?>
    </tbody>
  </table>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
