<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <script>
      function mascara(i){
  
        var v = i.value;
        
        if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
          i.value = v.substring(0, v.length-1);
          return;
        }
        
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";

      }        
    </script>
    <link href="estilo.css" rel="stylesheet">
  </head>
  <body>
    <div id="externa">
      <p>
        <h1>Pagina de Login</h1>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
          <div class="erro">
            <p>ERRO: Usuário ou senha inválidos</p>
          </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <?php 
          if(isset($_SESSION['msg'])){
        ?>
            <div class="erro">
              <p>Usuário inserido com sucesso!</p>
            </div>
        <?php 
          }
          unset($_SESSION['msg']);
        ?>
        <div id="interna">
          <form action="login.php" method="post">
            <label>Usuário:</label>
            <input oninput="mascara(this)" type="text" placeholder="Insira o seu CPF" id="IdSenha1" name="usuario"><br><br>
            <label>Senha: </label>
            <input name="senha" id="IdSenha" type="password" name="senha" maxlength="32" placeholder="Insira a senha"><br><br>
            <input type="submit" value="Entrar" id="entrar">
          </form>
          <p id="cadastro">Não é cadastrado? Clique <a href="cadastro.php">Aqui</a></p>
        </div>
      </p>
    </div>
    <footer>
      <p>2022 - by Gabriel Lange <br>
      <a href="https://www.instagram.com/1lg_gabriel/" target="u_blank">Instagram </a>|<a href="https://www.facebook.com/gabilange.lange" target="u_blank"> Facebook</a></p>
    </footer>
  </body>
</html>