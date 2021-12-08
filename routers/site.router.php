<?php 

$path = "/servidores-web";
$uri = str_replace($path, "",$_SERVER['REQUEST_URI']);
echo $uri . "\n";

switch($uri){
    case "/":
        echo "estas en el index";
        break;
    default:
        echo "no existe en los paths";
        break;
}
?>