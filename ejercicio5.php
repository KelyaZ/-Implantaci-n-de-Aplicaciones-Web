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

$aleatorio1 = rand(1,10);
$aleatorio2 = rand(1,10);
$aleatorio3 = rand(1,10);
print "<img src='img/cartas/c$aleatorio1.svg'>\n";
print "<img src='img/cartas/c$aleatorio2.svg'>\n";
print "<img src='img/cartas/c$aleatorio3.svg'>\n";

print "<br>";

If($aleatorio1 > $aleatorio2){
If($aleatorio1 > $aleatorio3){
echo 'La carta ' . $aleatorio1 . ' es mayor';
} else {
echo 'La carta ' . $aleatorio3 . ' es mayor';
}
} else {
If($aleatorio2 > $aleatorio3){
echo 'La carta ' . $aleatorio2 . ' es mayor';
} else {
echo 'La carta ' . $aleatorio3 . ' es mayor';
}
}

?>
    </tbody>
  </table>

  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
