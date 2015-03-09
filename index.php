<?php
/*
 * El frontend controller se encarga de configurar 
 * nuesta aplicacion 
 */

require("config.php");
require("helpers.php");

//llamar a los controladores adecuados
//var_dump($_GET);

//index.php
if(empty($_GET['url'])){
    require 'controllers/home.php';
}

//index.php?url=contactos
elseif ($_GET['url'] == 'contactos') {
    require 'controllers/contactos.php';
}

//Cuando se intente otra cosa
else{
    header("HTTP/1.0 404 Not Found");
    exit("Pagina no encontrada");
}





