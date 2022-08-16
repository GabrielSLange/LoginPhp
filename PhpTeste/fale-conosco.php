<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Tudo sobre Google Glass</title>
    <link rel="stylesheet" href="_css\estilo.css">    
    <link rel="stylesheet" href="_css/form.css">
    <script language="javascript" src="_javascript\funcoes.js"></script>
    <script>
        function calc_total(){
            var qtd = parseInt(document.getElementById('cQtd').value);
            tot =  qtd * 1500;
            document.getElementById('cTot').value = tot;
        }
    </script>
    <?php
        session_start();
    ?>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
            <h1>Google Glass</h1>
            <h2>A revolução do Google está chegando</h2>
            <br/><br/>
            </hgroup>
            <img id="icone" src="_imagens/contato.png"/>
            
            <nav id="menu">
                <h1>Menu Principal</h1>
                <ul>
                <li>Olá, <?php echo ($_SESSION['nome']); ?></li>
                <li onmousemove="MudaFoto('_imagens/home.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index1.php">Home</a></li>
                <li onmousemove="MudaFoto('_imagens/especificacoes.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="specs.php">Especificações</a></li>
                <li onmousemove="MudaFoto('_imagens/fotos.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="fotos.php">Fotos</a></li>
                <li onmousemove="MudaFoto('_imagens/multimidia.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="multimidia.php">Multimídia</a></li>
                <li onmousemove="MudaFoto('_imagens/contato.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="fale-conosco.php">Fale conosco</a></li>
                <li><a href="logout.php">Sair</a></li>
                </ul>
            </nav>
        </header>
        <section id="corpo-full">
            <article id="noticia-principal">
                <header id="cabecalho-artigo">
                    <hgroup>
                        <h3>Fale Conosco > Contato</h3>
                        <h1>Formulário de Contato</h1>
                        <h2>por Gabriel Lange</h2>
                        <h3 class="direita">Atualizado em 03/Maio/2022</h3>
                    </hgroup>
                </header>

            
                <form method="post" id="fContato" action="mailto:adalbertovalentin845@gmail.com" oninput="calc_total()">
                    <fieldset id="usuario">
                        <legend>Identificação do Usuário</legend>
                            <p><label for="cNome">Nome:</label>
                            <input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
                            <p><label for="cSenha">Senha:</label>
                            <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Max 8 dígitos"/></p>
                            <p><label for="cMail">E-mail:</label>
                            <input type="email" name="tEmail" id="cEmail" size="20" maxlength="40"/></p>
                            <fieldset id="sexo">
                                <legend>Sexo</legend>
                                <input type="radio" name="tSexo" id="cMasc"/> <label for="cMasc">Masculino</label><br>
                                <input type="radio" name="tSexo" id="cFem"/> <label for="cFem">Feminino</label>
                            </fieldset>
                            <p><label for="cNasc">Data de Nascimento:</label>
                            <input type="date" name="tNasc" id="cNasc"/></p>
                        </fieldset>
                        <fieldset id="endereco">
                            <legend>Endereço do Usuário</legend>
                                <P><label for="cRua">Logradouro:</label>
                                <input type="text" name="tRua" id="cRua" size="20" maxlength="80" placeholder="Rua, Av. Trav..."></P>
                                <p><label for="cNum">Número:</label>
                                <input type="number" name="tNum" id="cNum" min="0" max="9999"/></p>
                                <p><label for="cEst">Estado:</label>
                                    <select name="tEst" id="cEst">
                                        <optgroup label="Região Sudeste">
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="SP">Sao Paulo</option>
                                            <option value="MG">Minas Gerais</option>
                                        </optgroup>
                                        <optgroup label="Região Centro-Oeste">
                                            <option value="GO" selected>Goiás</option>
                                            <option value="MT">Mato-Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                        </optgroup>
                                        <optgroup label="Região Sul">
                                            <option value="PR">Paraná</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                        </optgroup>
                                    </select></p></p>
                                <p><label for="cCid">Cidade:</label>
                                <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"></p>
                                <datalist id="cidades">
                                    <option value="Rio de Janeiro"></option>
                                    <option value="Nova Iguaçu"></option>
                                    <option value="Niterói"></option>
                                    <option value="Belford Roxo"></option>
                                </datalist>
                                
                        </fieldset>
                        <fieldset id="mensagem">
                            <legend>Mensagem do Usuário</legend>
                                <p><label for="cUrg">Grau de Urgência:</label>
                                Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10">Max</p>
                                <p><label for="cMsg">Mensagem:</label>
                                <textarea name="tMsg" id="cMsg" cols="45" rows="5" placeholder="Deixe aqui a sua mensagem..."></textarea></p>
                        </fieldset>
                        <fieldset id="pedido">
                            <legend>Quero um Google Glass</legend>
                                <p><input type="checkbox" name="tPed" id="cPed" checked/>
                                <label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
                                <p><label for="cCor">Cor:</label>
                                <input type="color" name="tCor" id="cCor" value="#0000FF"></p>
                                <p><label for="cQtd">Quantidade:</label>
                                <input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0"></p>
                                <p><label for="cTot">Preço Total: R$</label>
                                <input type="text" name="tTot" id="cTot" placeholder="Total a pagar" readonly></p>
                        </fieldset>
                        <input type="image" name="tEnviar" src="_imagens/botao-enviar.png">
                </form>
            </article>
        </section>

        <footer id="rodape">
            <p>2022 - by Gabriel Lange <br/>
                <a href="https://www.facebook.com/gabilange.lange" target="_blank">Facebook</a> | 
                <a href="https://www.instagram.com/1lg_gabriel/" target="_blank">Instagram</a>
            </p>
        </footer>
    </div>
</body>
</html>