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

$aleatorio1 = rand(1,6);
$aleatorio2 = rand(1,6);
print"<img src='img/dados/$aleatorio1.svg'>";
print"<img src='img/dados/$aleatorio2.svg'>";
print "<p>Suma: $aleatorio1 + $aleatorio2 = ".($aleatorio1 + $aleatorio2)."<p>"


?>
    </tbody>
  </table>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
