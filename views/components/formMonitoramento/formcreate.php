
      <!-- Modal -->
      <div class="modal fade" id="createmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Network</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="monitaramento/store" method="post">
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
        </form>
    </div>
  </div>
</div>