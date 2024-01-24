<?php use models\Network;
?>

<div class="container mt-3">
      <h1>Lista de IP <i class="fas fa-network-wired"></i></h1>
      <hr>

      <a href="" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#createmodal"><i class="fa-solid fa-plus"></i></a>

      <table class="table table-condensed table-hover">
    <thead>
      <tr>
        <th>Origem</th>
        <th>Network</th>
        <th>Comentario</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $select = Network::Selectall("SELECT * FROM networks");
      
      foreach($select as $dados):?>
      <tr>
        <td><?= $dados['origem']?></td>
        <td><?= $dados['network']?></td>
        <td><?= $dados['descricao']?></td>
        <td>
          <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editmodal<?=$dados['id']?>" >EdITA</a>
          <?php include('views/components/formMonitoramento/formedit.php'); ?>
          <form action="monitaramento/destroy" method="post">
            <input type="hidden" name="id" value="<?= $dados['id'] ?>">
            <button type="submit" class="btn btn-danger">Destroy</button>
          </form>
        </td>
      </tr>
      <?php endforeach;?>
  </table>
      </div>


<?php include('views/components/formMonitoramento/formcreate.php'); ?>