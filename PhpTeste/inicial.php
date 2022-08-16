<?php
    session_start();
    include('verifica_login.php');
?>
<p>Olá, <?php echo($_SESSION['usuario']); ?></p>

<button><a href="logout.php">Sair</a></button>