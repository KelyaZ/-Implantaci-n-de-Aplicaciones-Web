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

  $vidas = 5;
  $nombre = "Kelya";

  print '<p> Hola' .$nombre. '</p>'; /*Con ' No coge las variables, hay que cerrarlas y poner .variable. Sirve para escribir $ sin ser variable*/ 

  print "<p>Tienes $vidas vidas. </p>";

  print "<p>Tienes \$vidas vidas. </p>"; /*Para que coja $ como signo y no como variable */

  $a = 5;
  $b = 4;
  $suma = $a + $b;

  print "<p>Suma: $a + $b = ".($a + $b)."<p>"; /*Sin parentesis no hace la operación, la toma como texto simple OPERACION MATEMATICA*/ 
  print "<p>Suma: $a + $b = ".$suma."<p>";  /*Si es solo una variable no hace falta poner () */

  $texto1 = "Hola!";
  $texto2 = "¿Qué tal?";
  $texto3 = "Adios";

  $textototal = $texto1." ".$texto2.$texto3; //Concatenar 3 variables y que aparezcan juntas, para añadir un espacio entre ellas ."". Añadir concatenantes.


  print "<br>";
  print "<h1>$textototal</h1>";

  $ancho=3;
  print "<p>La mesa tiene una anchura de ".$ancho."m.</p>";
  print "<p>La mesa tiene una anchura de {$ancho}m.</p>";  //Para que salga $anchoM todo pegado 3m.

  $alumnos = ["Joseba", "Jon ander", "Kelya","Xabi", "Alex"];
  print "<p>El primer alumno es: $alumnos[2]</p>"; //Para un solo nombre
  
  $cuadrados = [3=>9, 5=>25, 10=>100]; //Matrices
  print "\t<p>El cuadrado de 3 es $cuadrados[3]</p>\n"; //Saltos de línea
  print "\t<p>El cuadrado de 10 es $cuadrados[10]</p>\n"; //Tabulacion al inicio

  $edades = ["Irati"=>34, "Joseba"=>32, "Jon Ander"=>23, "Kelya"=>18];
  $edadIrati = $edades["Irati"];
  print "<p>La edad de Irati es $edades[Irati]</p>";
  print "<p>La edad de Irati es $edadIrati</p>";

  $aleatorio = rand(1,50);
  print "<p>Valor aleatorio entre 1 y 50 = $aleatorio</p>";

  //php se ejecuta en el servidor, el html lo manda el xamp con el resultado por eso no sale en ctrl + u.

  $x = 5;//a
  $y = 7;//b

  if ($x>5){ //<= == >= mayor o igual, igual, menor o igual
    print "<p>A es mayor que 5.</p>\n";
  }
  else{
    print "<p>A no es mayor que 5.</p>\n";
  }

  if ($x>5 && $x<7){  //or ||  and && e lo mimo poner && que and 
    print "<p>A es mayor que 5 y menor que 7.</p>\n";
  }


  if ($x!=5){  //No es 5
    print "<p>No es 5</p>\n";
  }
  else if ($a<7) {
    print "<p>Es menor que 7</p>\n";
  }
  else {
    print "<p>No es menor que 7</p>\n";
  }

  if ($x) {  //es igual a $a == true que es verdad
    print "<p>No es 5</p>\n";
  }

  for ($contador = 1; $contador <=6; $contador++){ //$contador = $contador+2 pa que suba de dos en dos en vez d uno en uno/-- para que vaya bajando en vez de subiendo/Que empiece en 0 hasta que sea mayor que 5 y siempre suma más 1
    print "<p>El valor es $contador</p>\n"; //Cuidao bucles infinitos que crashea y se keda colgao.
    print"<img src='img/dados/$contador.svg'>";
  }


?>
<img src="img/dados/1.svg">


  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
