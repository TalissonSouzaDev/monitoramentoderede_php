

<div class="container-user-profile">

<div class="card">
    <div class="card-header">Atualizar Dados</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" name="name" id="" value="<?= $userdata['name']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" name="name" id="" value="<?= $userdata['email']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Perfil:</label>
                <input type="text" name="profile" class="form-control" value="<?= $userdata['profile']?>" disabled>
            </div>

            <div class="form-group">
              
                <input type="submit" value="Atualizar" class="form-control btn btn-dark">
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">Alterar Senha</div>
    <div class="card-body">

    <form action="" method="post">
            <div class="form-group">
                <label for="">Digite sua senha atual:</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Digite sua nova senha:</label>
                <input type="text" name="newpassword" id="newpassword"  class="form-control">
            </div>
            <div class="form-group">
                <label for="">Confirme a senha:</label>
                <input type="text" name="confirmenewpassword" id="confirmenewpassword" class="form-control">
            </div>

            <div class="form-group">
              
                <input type="submit" value="Atualizar" class="form-control btn btn-dark" id="buttton-password" disabled>
            </div>
        </form>
    </div>
</div>

</div>


<script>
 const newpassword = document.querySelector("#newpassword");
 const buttonpassword = document.querySelector("#buttton-password");
 const confirmenewpassword = document.querySelector("#confirmenewpassword");
 Fconfirmenewpassword()


function Fconfirmenewpassword(){
        confirmenewpassword.addEventListener('keyup',function(){
              confirmenewpassword.value.length > 0 ?  buttonpassword.disabled = false :  buttonpassword.disabled = true
                
                          })

                        }




</script>