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

$aleatorio = rand(128512, 128586); 
print "<p>Emoticono &#$aleatorio</p>"  


?>
    </tbody>
  </table>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
