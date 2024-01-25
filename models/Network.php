<?php
namespace models;

use models\traits\TraitGlobal;

class Network extends model
{

    use TraitGlobal;
    
    public int $id;
    public string $origem;
    public string $network;
    public string $descricao;
    public int $user_id;

    public static function AnaliseNetWork($network)
    {
        exec("ping -n 1 ".$network,$output,$status);
        return $status;
    }


}


?>