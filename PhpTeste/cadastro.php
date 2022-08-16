<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
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
    <link rel="stylesheet" href="estilo.css">
    
  </head>
  <body>
    <div id="externa">
      <?php
        if(isset($_SESSION['msg'])){
      ?>
        <div class="erro">
          <p>O CPF já está cadastrado!</p>
        </div>
      <?php
        }
        unset($_SESSION['msg']);
      ?>
        <h1 style="text-align: center;">Cadastro</h1>
        <div id="interna">
            <form action="InfoCadastro.php" method="post">
                <label for="">Nome: </label>
                <input type="text" maxlength="200" placeholder="Insira o nome completo" id="IdSenha1" name="nome"><br><br>
                <label for="">CPF:</label>
                <input oninput="mascara(this)" type="text" placeholder="Insira o seu CPF" id="IdCpf" name="cpf"><br><br>
                <label for="">Senha:</label>
                <input type="password" placeholder="Insira uma senha" id="IdSenha1" name="senha" ><br><br>
                <input type="submit" value="Enviar" id="entrar">
            </form>
        </div>
    </div>
    <footer>
      <p>2022 - by Gabriel Lange <br>
      <a href="https://www.instagram.com/1lg_gabriel/" target="u_blank">Instagram </a>|<a href="https://www.facebook.com/gabilange.lange" target="u_blank"> Facebook</a></p>
    </footer>
  </body>
</html>