<?php
namespace Controllers;
use models\Network;

class ControllerMonitoramento extends Controller
{

    public function monitoramento()
    {
        //$monitoramento = Network::Select("SELECT * FROM Network");
        return $this->view->render("Monitoramento/monitoramento");
    }

    public function index()
    {
        return $this->view->render("Monitoramento/index");
    }

    public function create()
    {
        return $this->view->render("monitoramento");
    }

    public function edit()
    {
        return $this->view->render("monitoramento");
    }
}

?>