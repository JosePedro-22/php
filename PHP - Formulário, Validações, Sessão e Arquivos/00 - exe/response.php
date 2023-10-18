<?php
    session_start();
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['aviso'] = '';

    if($name){
        echo "<h2>".$name."</h2><a href='exit.php'>Sair</a>";
    }
    else{
        $_SESSION['aviso'] = "Preencha os dados corretamente!";
        header('Location: form.php');
        exit;
    }
?>