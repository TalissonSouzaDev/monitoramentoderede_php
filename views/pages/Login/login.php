
<?php
// variavel do header
if(count($userdata) > 0)
{
    \Views\mainView::redirect('index');
}
?>


<div class="card-login-container">


    <div class="card-logo-login">
       <span>
       <i class="fa-solid fa-globe"></i>
       </span>
       <h1>Monitoramento de Rede</h1>

    </div>






<div class="card_login">
<form action="autenticate" method="post">

<div class="form-group">
<input type="email" name="email" placeholder="Digite seu E-mail" require autocomplete="off">
</div>

<div class="form-group">
<input type="password" name="password" placeholder="Digite sua senha" require autocomplete="off">
</div>
 <input type="submit" value="Entrar" >
</form>
</div>






</div>