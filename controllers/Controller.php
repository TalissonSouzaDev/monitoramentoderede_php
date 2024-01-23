<?php
namespace Controllers;
use Views\mainView;

class Controller 
{
    protected $view;
    public function __construct()
    {
        $this->view = new mainView();
        
    }

}

?>