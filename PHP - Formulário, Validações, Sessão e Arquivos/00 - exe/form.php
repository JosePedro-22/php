<?php
session_start();

    if(isset($_SESSION['aviso'])) {
        echo '<h4>'.$_SESSION['aviso'].'</h4>';
        $_SESSION['aviso'] = '';
    }
?>

<form method="post" action="response.php">
    <h2>Digite seu nome para realizar Login!</h2>
    <label>Nome:</label>
    <input type="text" name="name">
    <br />
    <br />
    <button type="submit">Enviar</button>
</form>