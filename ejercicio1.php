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
<!--Esto es un comentario-->
<body>
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>


<?php

  

  $aleatorio = rand(1,6);
  print "<p>Valor aleatorio entre 1 y 6 = $aleatorio</p>";

  
?>


  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
