<?php
require('config.php');

$sql = $pdo->query('SELECT * FROM users');

$list = [];

if($sql->rowCount() > 0){
    $list = $sql->fetchAll();
}
?>

<h2>Listagem de usuarios</h2>

<a href="adicionar.php">Adicionar User</a>

<table border="1" width="100%">
    <thead>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>acoes</th>
    </thead>
    <tbody>
        <?php foreach($list as $item):?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['email'] ?></td>
                <td>
                    <a href="editar.php?id=<?=$item['id'];?>"> [ Editar ] </a>
                    <a href="excluir.php?id=<?=$item['id'];?>" onclick="return confirm('Tem certeza que deseja excluir usuario ?')"> [ EXCLUIR ]</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>