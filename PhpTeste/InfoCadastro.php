<?php
    session_start();
    include('conexao.php');
    //include('login.php');

    $nome=mysqli_real_escape_string($conexao, $_POST['nome']);
    $CPF=mysqli_real_escape_string($conexao, $_POST['cpf']);
    $senha=mysqli_real_escape_string($conexao, $_POST['senha']);

        
    $CPF = trim($CPF);
    $CPF = str_replace(".", "", $CPF);
    $CPF = str_replace("-", "", $CPF);

    $QueryBusca= "SELECT * FROM usuario where username = '{$CPF}';";

    $result=mysqli_query($conexao, $QueryBusca);

    $row=mysqli_num_rows($result);


    if($row==0){
        $query= "INSERT INTO usuario(username, senha, nome) VALUES('{$CPF}', md5('{$senha}'), '{$nome}')";
        mysqli_query($conexao, $query);
        $_SESSION['msg']=true;
        header('Location: index1.php');
    }
    else{
        $_SESSION['msg']=true;
        header('Location: cadastro.php');
    }  
?>