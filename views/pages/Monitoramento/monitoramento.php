<?php use models\Network; ?>

<div class="container mt-3">
      <h1>Monitoramento de Redes <i class="fas fa-network-wired"></i></h1>
      <hr>

    <div class="monitoramento-list">

   <?php 
      $select = Network::Selectall("SELECT * FROM networks");
   foreach($select as $query):?>
   <?php $status = Network::AnaliseNetWork($query['network']); ?>
   <div class="card <?= $status == 0 ? "bg-success" : "bg-danger" ?> text-white">
    <div class="card-body">
      <span><?= $query['origem']?></span><br>
      <span><?= $query['network']?></span>
    </div>
    </div>
    <?php endforeach; ?>
    </div>
      </div>


      <?php 
header("refresh: 10");
?>