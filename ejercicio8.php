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

$aleatorio1 = rand(0,255);
$aleatorio2 = rand(0,255);
$aleatorio3 = rand(0,255);

$valor1 = (bool)random_int(0, 1);
if ($valor1 == 0) { $valor1 = "none";}
else { $valor1 = "block";}

$valor2 = (bool)random_int(0, 1);
if ($valor2 == 0) { $valor2 = "none";}
else { $valor2 = "block";}

$valor3 = (bool)random_int(0, 1);
if ($valor3 == 0) { $valor3 = "none";}
else { $valor3 = "block";}

$valor4 = (bool)random_int(0, 1);
if ($valor4 == 0) { $valor4 = "none";}
else { $valor4 = "block";}

$valor5 = (bool)random_int(0, 1);
if ($valor5 == 0) { $valor5 = "none";}
else { $valor5 = "block";}



print "

<table>
  <tr>
    <td><svg height='150' width='150'>
    <circle style='display:$valor1' cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($aleatorio1,$aleatorio2,$aleatorio3)'/>
    </svg></td>
    <td><svg height='150' width='150'>
    <circle style='display:$valor2' cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($aleatorio1,$aleatorio2,$aleatorio3)'/>
    </svg></td>
    <td><svg height='150' width='150'>
    <circle style='display:$valor3' cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($aleatorio1,$aleatorio2,$aleatorio3)'/>
    </svg></td>
    <td><svg height='150' width='150'>
    <circle style='display:$valor4' cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($aleatorio1,$aleatorio2,$aleatorio3)'/>
    </svg></td>
    <td><svg height='150' width='150'>
    <circle style='display:$valor5' cx='60' cy='60' r='50' stroke='black' stroke-width='3' fill='rgb($aleatorio1,$aleatorio2,$aleatorio3)'/>
    </svg></td>
  </tr>
</table>";


?>


  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
