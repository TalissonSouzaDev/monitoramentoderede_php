<?php
namespace Controllers;

use Exception;
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

    public function store(array $data)
    {
        
     try{
        
        $create = Network::create("networks",$data);
        if($create)
        {
            // rota principal sera o /Monitoramento/index
            return $this->view->redirect();
        }
        return $this->view->redirect();
     }
     catch(Exception $e)
     {
        return $this->view->render("Monitoramento/monitoramento");
     }
  
        
    }

    public function edit()
    {
        return $this->view->render("monitoramento");
    }


    public function destroy(int $id)
    {
       $findId =  Network::FindByid("networks",$id);
       $destroy =  Network::delete("networks",$findId['id']);
       if($destroy)
       {
        return $this->view->redirect();
       }
       return $this->view->redirect();

       
       
    }
}

?>