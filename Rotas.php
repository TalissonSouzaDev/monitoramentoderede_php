<?php

$ControllerMonitoramento = new \Controllers\ControllerMonitoramento;


Router::get("/monitaramento",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->monitoramento();
});

Router::get("/index",function() use ($ControllerMonitoramento) {
       $ControllerMonitoramento->index();
});

Router::post("/monitaramento/store",function() use ($ControllerMonitoramento) {

    $origem = (string)filter_input(INPUT_POST,'origem');
    $network = (string)filter_input(INPUT_POST,'network');
    $descricao = (string)filter_input(INPUT_POST,'descricao');
    $arraydata = [$origem,$network,$descricao,'1'];

    $ControllerMonitoramento->store($arraydata);
}); 



Router::post("/monitaramento/destroy",function() use ($ControllerMonitoramento) {

    $id = (int)filter_input(INPUT_POST,'id');
    $ControllerMonitoramento->destroy($id);
});