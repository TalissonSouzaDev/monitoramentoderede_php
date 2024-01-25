<?php use models\User;
?>

<div class="container mt-3">
      <h1>Usuarios <i class="fa-solid fa-user"></i></h1>
      <hr>
      <?php if($userdata['profile'] == "admin"):?>
      <a href="" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#createmodal"><i class="fa-solid fa-plus"></i></a>
      <?php endif;?>

      <table class="table table-condensed table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Perfil</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
      $select = User::Selectall("SELECT * FROM users");
      
      foreach($select as $dados):?>
      <tr>
        <td><?= $dados['name']?></td>
        <td><?= $dados['email']?></td>
        <td><?= $dados['profile']?></td>
        <td>
            <a href="" class="btn btn-info">Reset Senha</a>
          <?php if($userdata['profile'] == "admin"):?>
            <form action="monitaramento/destroy" method="post">
            <input type="hidden" name="id" value="<?= $dados['id'] ?>">
            <button type="submit" class="btn btn-danger">Destroy</button>
          </form>
          <?php endif;?>
        </td>
      </tr>
      <?php endforeach;?>
  </table>
      </div>


<?php include('views/components/formMonitoramento/formcreate.php'); ?>