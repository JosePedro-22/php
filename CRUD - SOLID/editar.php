<?php
    require('config.php');

    $id = filter_input(INPUT_GET, 'id');
    $info = [];

    if(!$id){
        header('Location:index.php');
        exit();
    }

    $sql = $pdo->prepare('SELECT * FROM users WHERE id = :id');
    $sql->bindParam(':id', $id);
    $sql->execute();

    if(!($sql->rowCount() > 0)){
        header('Location:index.php');
        exit();
    }
    
    $info = $sql->fetch( PDO::FETCH_ASSOC );

?>
<form method="POST" action="editar_action.php">
    <h2>Editar User</h2>
    
    <label>NOME:</label>
    <input type="text" name="name" value="<?=$info['name']?>"/><br/><br/>

    <label>EMAIL</label>
    <input type="text" name="email" value="<?=$info['email']?>"/><br/><br/>
    
    <label>PASSWORD</label>
    <input type="text" name="password" value="<?=$info['password']?>"/><br/><br/>

    <button type="submit">Enviar</button>
    <input type="hidden" name="id" value="<?=$info['id']?>"/><br/><br/>
</form>