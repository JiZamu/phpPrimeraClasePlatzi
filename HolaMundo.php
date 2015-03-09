<?php

//para mostrar errores
ini_set('display errors', true);
error_reporting(E_ALL);

$condifencial = "contraseña";
$lenguaje = "PHP";

//Declarando una funcion
function view($lenguaje){
   require 'view.php';
}

//llamando la funcion
view($lenguaje);
        
