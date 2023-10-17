<?php
    session_start();
    require('header.php');

    if($_SESSION['aviso']) {
        echo $_SESSION['aviso'].'</br>';
        $_SESSION['aviso'] = '';
    }
?>
<form method="POST" action="getResponse.php" >
    <label>Nome: </label>
    <input type="text" name="name" value="" /></br></br>

    <label>Email: </label>
    <input type="text" name="email" /></br></br>

    <label>Idade: </label>
    <input type="number" name="years"/></br></br>

    <button type="submit">Enviar</button>
</form>