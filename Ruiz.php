<?php
/**
  *  @author Alejandro Ruiz
  *  @version 1.0
  *  @internal Tarea 5 DAW
*/

  /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }

  
  /**
    * Función resta de dos números
    * @param int $num1
    * @param int $num2
    * @return float
  */

  function resta ($num1, $num2) {
    $resultadoresta = $num1 - $num2;
    return $resultadoresta;

}

$suma = suma (24,42);
$resta = resta (20,10);

echo $suma;
echo $resta;

?>