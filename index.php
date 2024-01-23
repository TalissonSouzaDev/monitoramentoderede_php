<?php
define("HOST","localhost");
define("DATATBASE","monitoramento");
define("USER",'root');
define("PASSWORD","");


$autoload = function($class)
{
    include($class.'.php');
};

spl_autoload_register($autoload);

include("Rotas.php");


?>