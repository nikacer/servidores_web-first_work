<?php

/**
 * se aplica un array indexado, podria usarse un metodo mas eficiente
 * es a modo de mostrar habilidades
 */
function dateObtain(){
  return [
      date('m-d-Y h:i:s a'),
      date('m', time()),
      date('d', time()),
      date('Y', time()),
      date('a', time())
  ];
}

/**
 * calcula el año bisiesto
 */
function anoBisiesto($y){
    $response = false;
    if (($y%4 == 0 && $y%100 != 0) || $y%400 == 0){
        $response=true;
    }
    return $response;
}
?>