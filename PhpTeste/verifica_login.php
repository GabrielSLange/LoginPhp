<?php
    if(!$_SESSION['usuario']){
        header('Location: index1.php');
        exit();
    }
?>