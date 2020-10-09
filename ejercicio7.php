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

<?php

$jugador1_1 = rand(1,6);
$jugador1_2 = rand(1,6);
$jugador1_3 = rand(1,6);

$jugador2_1 = rand(1,6);
$jugador2_2 = rand(1,6);
$jugador2_3 = rand(1,6);

$trio1 = false;
$trio2 = false;

$pareja1 = false;
$pareja2 = false;
$valorpareja1 = 0;
$valorpareja2 = 0;

$suma1=$jugador1_1+$jugador1_2+$jugador1_3;
$suma2=$jugador2_1+$jugador2_2+$jugador2_3;

print "<div style = 'background-color:pink'>";
print "<img src='img/dados/$jugador1_1.svg'>";
print "<img src='img/dados/$jugador1_2.svg'>";
print "<img src='img/dados/$jugador1_3.svg'>";
print "</div>";

print "<div style = 'background-color:hotpink'>";
print "<img src='img/dados/$jugador2_1.svg'>";
print "<img src='img/dados/$jugador2_2.svg'>";
print "<img src='img/dados/$jugador2_3.svg'>";
print "</div>";


/*Comprobar trios o parejas1*/
if($jugador1_1==$jugador1_2 && $jugador1_2 == $jugador1_3){
  $trio1=true;
  //parejas 1
}elseif ($jugador1_1==$jugador1_2){
  $pareja1 = true;
  $valorpareja1 = $jugador1_1;
}
elseif ($jugador1_1==$jugador1_3){
  $pareja1 = true;
  $valorpareja1 = $jugador1_1;
}
elseif ($jugador1_2==$jugador1_3){
  $pareja1 = true;
  $valorpareja1 = $jugador1_2;
}

//Comprobar trios o parejas2
if($jugador2_1==$jugador2_2 && $jugador2_2 == $jugador2_3){
  $trio2=true;
  //parejas 2
}elseif ($jugador2_1==$jugador2_2){
  $pareja2 = true;
  $valorpareja2 = $jugador2_1;
}
elseif ($jugador2_1==$jugador2_3){
  $pareja2 = true;
  $valorpareja2 = $jugador2_1;
}
elseif ($jugador2_2==$jugador2_3){
  $pareja2 = true;
  $valorpareja2 = $jugador2_2;
}

/*Si tienen trios gana el valor más grande*/
if($trio1==true && $trio2==true) {
    if($jugador1_1 > $jugador2_1) {
      print "<p>Gana jugador 1 por trio alto</p>";
    }
    elseif ($jugador1_1 < $jugador2_1){
      print "<p>Gana jugador 2 por trio alto</p>";
    }
    else{
      print "<p>Empate</p>";
    }
}
else{//Si los dos no tienen trio hacer esto
  //Si uno tiene trio y el otro no gana el que lo tiene
  if($trio1 == true && $trio2 == false){
    print "<p>Gana jugador 1 por trio</p>";
  }elseif($trio2 == true && $trio1 == false){
    print "<p>Gana jugador 2 por trio</p>"; //algo pasa
  }
  else{
    //si ninguno tiene trio comprobar parejas
    //si son iguales
    if($pareja1==true && $pareja2==true){
      if($valorpareja1>$valorpareja2){//Gana el valor alto
          print "<p>Gana jugador 1 pareja alta</p>";
      }elseif($valorpareja1<$valorpareja2){
          print "<p>Gana jugador 2 pareja alta</p>";
      }else{//Parejas iguales = suma los dados
        if($suma1>$suma2){
          print "<p>Gana jugador 1 suma alta</p>";
        }else {
          print "<p>Gana jugador 2 suma alta</p>";
        }
      }
    }elseif($pareja1 == true && $pareja2 ==false){
      print "<p>Gana jugador 1 por pareja</p>";
    }elseif($pareja1 == false && $pareja2 == true){
      print "<p>Gana jugador 2 por pareja</p>";
    }
  }
}



?>


  <footer>
    <p>Kelya</p>
  </footer>
</body>
</html>
