<?php
    //secao funciona enquanto o navegador estiver aberto, o cookie tem um validade especifica e fica armazenado no seu computador!
    session_start();
    require('header.php');
?>
    <a href="apagar.php">Apagar Cookie</a></br></br>

<form method="POST" action="getResponse.php" >
    <label>Nome: </label>
    <input type="text" name="name" value="" /></br></br>

    <label>Email: </label>
    <input type="text" name="email" /></br></br>

    <label>Idade: </label>
    <input type="number" name="years"/></br></br>

    <button type="submit">Enviar</button>
</form>