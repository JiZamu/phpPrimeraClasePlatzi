<?php

require("config.php");
require("helpers.php");

$lenguaje = "PHP";
$itulo = "Mejorando.la";
$arreglo = array("lenguaje"=>$lenguaje, "titulo"=>$itulo);

//llamando la funcion
view("view", $arreglo);
        
