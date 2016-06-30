<?php

// Incluimos la clase creada para utilizar los métodos desarrollados
include 'lib/palindromo.class.php';

// Creamos un nuevo objeto de la clase anterior
$objeto = new palindromo();

// Recibimos por medio de POST la cadena
$cadena = $_POST['word'];

// Invocamos los métodos necesarios que nos regresaran las palabras necesarias
$info = $objeto->palindromos($cadena);
$data = $objeto->result($info);

// Imprimimos en formato JSON la data
echo json_encode($data);