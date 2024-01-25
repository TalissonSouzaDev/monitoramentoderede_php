<?php
@session_start();
@ob_start();
use models\User;
$user = new User;
$userdata =  [];

if(isset($_SESSION['user']['token']))
{
    $token = $_SESSION['user']['token'];
    $userdata = $user->findByToken($token);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="views/public/css/style.css">
    <link rel="stylesheet" href="views/public/css/pages.css">
    <link rel="stylesheet" href="views/public/css/login.css">

   <script src="views/public/js/index.js" defer></script>
    <title>Monitoramento de Rede</title>
</head>
<body>
    <?php if(count($userdata) > 0):  ?>
   <header>
    <div class="navbar">
        <button type="button" id="bars" value="abrir"><i class='fas fa-times'></i></button>
    </div>
    <div class="container-sidebar">
        <h1>Logo</h1>
        <ul id="links">
            <li><a href="monitaramento">Monitoramento</a></li>
            <li><a href="index">Tabela de IP</a></li>
            <li><a href="users">Usuarios</a></li>
            <li><a href="profile"><?= ucfirst($userdata['name'])?></a></li>
            <li><a href="logout" class="btn btn-dark">Sair</a></li>
         
        </ul>

    </div>
   </header>
   <main>
   <?php endif; ?>