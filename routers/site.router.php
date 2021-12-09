<?php 


$uri = str_replace($path, "",$_SERVER['REQUEST_URI']);
$pageDefault = "./views/error400.php";
foreach ($items as $valor){
    if($valor["url"] == $uri){
        $pageDefault = $valor["view"];
    };
};

include_once($pageDefault);
?>