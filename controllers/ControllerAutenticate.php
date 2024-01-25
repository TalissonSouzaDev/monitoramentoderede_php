<?php
namespace Controllers;
use models\User;
class ControllerAutenticate extends Controller
{

    public function index()
    {
        return $this->view->render("Login/login");
    }

   public function Autenticate($email,$password)
   {
    $userauth = new User();
    $data = $userauth->autenticateLogin($email,$password);
    if(count($data) > 0)
    {
        $datauser = $userauth->newToken($data['id']);
        $_SESSION['user']['token'] =  $datauser['token'];
        $_SESSION['user']['name'] =  $datauser['name'];
        $_SESSION['user']['email'] =  $datauser['email'];
        return $this->view->redirect("index");
    }
    return $this->view->redirect("login");

   }


   public function logout()
   {
    session_destroy();

    return $this->view->redirect("login");
   }
}

?>