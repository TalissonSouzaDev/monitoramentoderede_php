<?php use models\Network;
$bim = "25";

//$data = ["desconhecido","172.24.196.102","desconhecido",1];
//Network::create("networks",$data);
?>

<div class="container mt-3">
      <h1>Lista de IP <i class="fas fa-network-wired"></i></h1>
      <hr>

      <a href="" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></a>

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
          <a href="" class="btn btn-warning">EdITA</a>
          <a href="" class="btn btn-danger">EXCLUIR</a>
        </td>
      </tr>
      <?php endforeach;?>
  </table>
      </div>



      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Network</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-control">
          <label for="">Origem</label>
          <input type="text" name="origem" class="form-control">
        </div>

        <div class="form-control">
          <label for="">Network</label>
          <input type="text" name="network" class="form-control">
        </div>

        <div class="form-control">
          <label for="">Descrição</label>
          <textarea name="descricao" class="form-control" rows="10"></textarea>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Salva</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>