<?php
namespace Controllers;

use Exception;
use models\Network;

class UserController extends Controller
{
    public function index()
    {

        return $this->view->render("User/index");
    }

    public function profile()
    {

        return $this->view->render("User/profile");
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

    public function update(int $id,array $data)
    {
        //print_r($data);exit;
        $updateNetwork = Network::FindByid('networks',$id);
        $updateNetwork['origem'] = $data[0] ?? $updateNetwork['origem'] ;
        $updateNetwork['network'] = $data[1] ?? $updateNetwork['network'];
        $updateNetwork['descricao'] = $data[2] ?? $updateNetwork['descricao'];
        
        $update = Network::update("networks",$updateNetwork,$id);
        if($update)
        {
          return $this->view->redirect(); 
        }
        

         return $this->view->redirect();
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