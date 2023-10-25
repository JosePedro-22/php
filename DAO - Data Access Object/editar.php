<?php
    require 'config.php';
    require 'dao/UsuarioDaoPgsql.php';

    $usuarioDao = New UsuarioDaoPsql($pdo);
    $usuario = false;

    $id = filter_input(INPUT_GET, 'id');
    $info = [];

    if(!$id || !$usuario = $usuarioDao->findById($id)){
        header('Location:index.php');
        exit();
    }

?>
<form method="POST" action="editar_action.php">
    <h2>Editar User</h2>
    
    <label>NOME:</label>
    <input type="text" name="name" value="<?=$usuario->getName();?>"/><br/><br/>

    <label>EMAIL</label>
    <input type="text" name="email" value="<?=$usuario->getEmail();?>"/><br/><br/>
    
    <label>PASSWORD</label>
    <input type="text" name="password" value="<?=$usuario->getPassword();?>"/><br/><br/>

    <button type="submit">Enviar</button>
    <input type="hidden" name="id" value="<?=$usuario->getId();?>"/><br/><br/>
</form>