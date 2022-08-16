<?php
    session_start();
    include('conexao.php');
    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header("Location: index1.php");
        exit();
    }

    $usuario=mysqli_real_escape_string($conexao, $_POST['usuario']);
    $usuario = trim($usuario);
    $usuario = str_replace(".", "", $usuario);
    $usuario = str_replace("-", "", $usuario);

    //echo ($usuario);

    $senha=mysqli_real_escape_string($conexao, $_POST['senha']);
    
    $query= "SELECT * FROM login.usuario where username = '{$usuario}' and senha=md5('{$senha}')";
    
    $queryBusc= "SELECT nome FROM usuario WHERE username = '{$usuario}'";

    $consult=mysqli_query($conexao, $queryBusc);
    $nome=mysqli_fetch_row($consult);
    $nom=implode('', $nome);
    
    //echo ($nom);


    $result=mysqli_query($conexao, $query);

    $row=mysqli_num_rows($result);

    if($row==1){
        $_SESSION['usuario']=$nom;
        header('Location: index2.php');
        exit();
    }
    else{
        $_SESSION['nao_autenticado']=true;
        header('Location: index1.php');
        exit();
    }
?>