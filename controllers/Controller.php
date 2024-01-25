<?php
namespace Controllers;

use models\traits\TraitGlobal;
use Views\mainView;

class Controller 
{
    use TraitGlobal;
    protected $view;
    public function __construct()
    {
        $this->view = new mainView();
        
    }

}

?>