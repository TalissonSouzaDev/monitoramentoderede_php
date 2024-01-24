<?php
namespace models;


class Network extends model
{

    public static function AnaliseNetWork($network)
    {
        exec("ping -n 1 ".$network,$output,$status);
        return $status;
    }

}


?>