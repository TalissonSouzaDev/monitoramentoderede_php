<?php

$ControllerMonitoramento = new \Controllers\ControllerMonitoramento;
$ControllerAutenticate = new \Controllers\ControllerAutenticate;
$UserController = new \Controllers\UserController;

Router::get("/monitaramento",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->MiddlewareAuth(true);
    $ControllerMonitoramento->monitoramento();
});

Router::get("/index",function() use ($ControllerMonitoramento) {
     $ControllerMonitoramento->MiddlewareAuth(true);
       $ControllerMonitoramento->index();
});

Router::post("/monitaramento/store",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->MiddlewareAuth(true);
    $origem = (string)filter_input(INPUT_POST,'origem');
    $network = (string)filter_input(INPUT_POST,'network');
    $descricao = (string)filter_input(INPUT_POST,'descricao');
    $arraydata = [$origem,$network,$descricao,'1'];

    $ControllerMonitoramento->store($arraydata);
}); 


Router::post("/monitaramento/update",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->MiddlewareAuth(true);
    $id = (int)filter_input(INPUT_POST,'id');
    $origem = (string)filter_input(INPUT_POST,'origem');
    $network = (string)filter_input(INPUT_POST,'network');
    $descricao = (string)filter_input(INPUT_POST,'descricao');
    $arraydata = [$origem,$network,$descricao];

    $ControllerMonitoramento->update($id,$arraydata);
});



Router::post("/monitaramento/destroy",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->MiddlewareAuth(true);
    $id = (int)filter_input(INPUT_POST,'id');
    $ControllerMonitoramento->destroy($id);
});



/*************************************************  Autenticação / Usuarios *********************************************************************** */


Router::get("/users",function() use ($UserController) {
    $UserController->MiddlewareAuth(true);
      $UserController->index();
});

Router::get("/profile",function() use ($UserController) {
    $UserController->MiddlewareAuth(true);
      $UserController->profile();
});


/*************************************************  Autenticação / Login *********************************************************************** */
Router::get("/login",function() use ($ControllerAutenticate) {

    $ControllerAutenticate->index();
});
Router::post("/autenticate",function() use ($ControllerAutenticate) {
    $email = (string)filter_input(INPUT_POST,'email');
    $password = (string)filter_input(INPUT_POST,'password');

    $ControllerAutenticate->Autenticate($email,$password);
});

Router::get("/logout",function() use ($ControllerAutenticate) {

   $ControllerAutenticate->logout();
});