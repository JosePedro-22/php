<?php
require 'config.php';
require 'dao/UsuarioDaoPgsql.php';

$usuarioDao = New UsuarioDaoPsql($pdo);

$list = $usuarioDao->findAll();
?>

<h2>Listagem de usuarios</h2>

<a href="adicionar.php">Adicionar User</a>

<table border="1" width="100%">
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>ACOES</th>
    </thead>
    <tbody>
        <?php foreach($list as $item):?>
            <tr>
                <td><?=$item->getId();?></td>
                <td><?=$item->getName();?></td>
                <td><?=$item->getEmail();?></td>
                <td>
                    <a href="editar.php?id=<?=$item->getId();?>"> [ Editar ] </a>
                    <a href="excluir.php?id=<?=$item->getId();?>" onclick="return confirm('Tem certeza que deseja excluir usuario ?')"> [ EXCLUIR ]</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>