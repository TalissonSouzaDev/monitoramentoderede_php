<?php

$ControllerMonitoramento = new \Controllers\ControllerMonitoramento;


Router::get("/monitaramento",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->monitoramento();
});

Router::get("/index",function() use ($ControllerMonitoramento) {
    $ControllerMonitoramento->index();
});