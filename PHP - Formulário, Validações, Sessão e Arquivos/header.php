<h1>Cabeçalho</h1></br>

<?php 
    if(isset($_SESSION['aviso'])) {
        echo $_SESSION['aviso'].'</br>';
        $_SESSION['aviso'] = '';
    }
    
    if(isset($_COOKIE['name'])){
        $nome = $_COOKIE['name'];
        echo "<h2>".$nome."</h2><hr>";
    }

?>