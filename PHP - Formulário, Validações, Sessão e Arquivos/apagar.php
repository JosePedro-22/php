<?php
    $setTime = time() + 3600;
    setcookie('name', '', $setTime);

    header('Location: index.php');
?>