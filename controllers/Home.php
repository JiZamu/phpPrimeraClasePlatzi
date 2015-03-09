<?php

$lenguaje = "PHP";
$itulo = "Mejorando.la";
$arreglo = array("lenguaje"=>$lenguaje, "titulo"=>$itulo);

//llamando la funcion
view("view/Home.tpl", $arreglo);
        
