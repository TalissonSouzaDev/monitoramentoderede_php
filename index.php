<?php
define("HOST","localhost");
define("DATATBASE","monitoramento");
define("USER",'root');
define("PASSWORD","");


$autoload = function($class)
{
    if(!file_exists($class))
    {
        include($class.'.php');
    }
    else
    {
        throw new Exception('Arquivo não encontrado');
    }
 
};

spl_autoload_register($autoload);

include("Rotas.php");


?>