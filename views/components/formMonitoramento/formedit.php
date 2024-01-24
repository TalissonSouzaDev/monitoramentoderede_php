
      <!-- Modal -->
      <div class="modal fade" id="editmodal<?=$dados['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <?php
      use models\Network;
      $id = (int)$dados['id'];
      $edinetwork = Network::FindByid("networks",$id);


     
      ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edita de Network <?=  $edinetwork['origem']  ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="monitaramento/post" method="post">
        <div class="modal-body">
        <div class="form-control">
          <label for="">Origem</label>
          <input type="text" name="origem" class="form-control" value="<?= $edinetwork['origem']?>">
        </div>

        <div class="form-control">
          <label for="">Network</label>
          <input type="text" name="network" class="form-control" value="<?= $edinetwork['network']?>">
        </div>

        <div class="form-control">
          <label for="">Descrição</label>
          <textarea name="descricao" class="form-control" rows="10"><?= $edinetwork['origem']?></textarea>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Salva</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
      </div>
        </form>
    </div>
  </div>
</div>