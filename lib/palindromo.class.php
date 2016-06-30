<?php

/*
 * Titulo: Clase para la busqueda de palíndromos mediante una cadena de caracteres
 * Author: Andrés Venegas Ruiz
 * Fecha: 29/Junio/2016
*/

class palindromo {

  // Se crea una función que recibe como parámetro la cadena de caracteres
  // Esta función nos permitira obtener las n combinaciones posibles de la cadena introducida
  public function palindromos($input){
    // Inicializamos la variable cadena
    $cadena = "";

    // En la siguiente sección verificamos si la cadena enviada como parametro es un arreglo, en caso de serlo
    // se convierte a una cadena única para poder procesarla
    if(is_array($input)){
      foreach($input as $char){
        $cadena.=$char;
      }
    }else{ 
      $cadena=$input;
    }

    // Verificamos que la cadena tenga dos o mas elementos
    if(strlen($cadena) < 2){
      // En caso de que solo tenga un elemento finalizamos la función returnandolo en un array
      return array($cadena);
    }

    // Arreglo que almacenara los palindromos
    $palindrome = array();

    // Obtenemos la cadena a partir del segundo elemento
    $cola = substr($cadena, 1);
    
    // Por medio de un foreach iteramos la cadena, como podemos ver, ciclamos con esta misma función
    // pero menos el primer caracter, esto con la finalidad de poder almacenar las diferentes combinaciones
    // que puede tener la cadena.
    foreach ($this->palindromos($cola) as $palindro){
      $longitud = strlen($palindro);

      for ($i = 0; $i <= $longitud; $i++){
        // Procesamos la cadena con los elementos necesarios, la concatenamos y agregamos al arreglo $palindrome
        //$palindrome[] = substr($palindro, 0, $i) . $cadena[0] . substr($palindro, $i);
        $palabra = substr($palindro, 0, $i) . $cadena[0] . substr($palindro, $i);
        if(!(in_array($palabra, $palindrome))){
          $palindrome[] = $palabra;
        }
      }
    }

    // Retornamos el arreglo
    return $palindrome;
  }

  // La siguiente función nos devuelve solamente aquellas combinaciones que son palindromos
  public function result($data){
    // Inicializamos el arreglo
    $pl = array();

    // Recorremos el arreglo devuelto por la función palindromos() 
    for ($i=0; $i < sizeof($data); $i++) {
      // El siguiente condicional es el que determina que la cadena se pueda leer igual de ambos ladoss
      if($data[$i] == strrev($data[$i])){
        // El siguiente arreglo se utiliza para evitar repeticiones en el arreglo
        if(!(in_array($data[$i], $pl))){
          $pl[] = $data[$i];
        }
      }
    }

    if(empty($pl)){ return array('NO HAY PALINDROMOS');}

    // Returnamos solo las palabras palindromas
    return $pl;
  }
}