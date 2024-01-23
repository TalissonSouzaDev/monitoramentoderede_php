<?php
namespace Views;

class mainView 
{
    public static function render($file,$path = [])
    {
        include("template/header.php");
        include("pages/".$file.".php");
        include("template/footer.php");
    }
}