<?php
namespace Views;

use models\traits\TraitGlobal;

class mainView 
{
    use TraitGlobal;
    public static function render($file,$path = [])
    {
        include("template/header.php");
        include("pages/".$file.".php");
        include("template/footer.php");
    }

    public static function redirect($back = '/Monitoramento/index')
    {
        header("location:{$back}");

    }
}