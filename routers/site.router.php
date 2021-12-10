<?php 


/**
 * este espacio permite definir  por medio de un archivo de constantes las
 * rutas por defecto del sitio, es una version inicial y basica d n rutader de uso completo
 */
$uri = str_replace($path, "",$_SERVER['REQUEST_URI']);
$pageDefault = "./views/error400.php";
foreach ($items as $valor){
    if($valor["url"] == $uri){
        $pageDefault = $valor["view"];
    };
};

include_once($pageDefault);
?>