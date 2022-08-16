<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Tudo sobre Google Glass</title>
    <link rel="stylesheet" href="_css\estilo.css">  
    <link rel="stylesheet" href="_css/specs.css">  
    <script language="javascript" src="_javascript\funcoes.js"></script>
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
            <img id="icone" src="_imagens/especificacoes.png"/>
            
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
                        <h3>Glass > Especificações</h3>
                        <h1>Raio-X no Google Glass</h1>
                        <h2>por Gabriel Lange</h2>
                        <h3 class="direita">Atualizado em 02/Maio/2022</h3>
                    </hgroup>
                </header>
            

                <p>Clique em qualquer área destacada da imagem para ter mais informações sobre os recursos do Google Glass. Qualquer ponto vermelho vai te levar a um lugar cheio de novas informações.</p>

                <section>
                    <img src="_imagens/glass-esquema-marcado.jpg" usemap="#meumapa">
                    <iframe src="google-glass.html" name="janela" id="frame-spec" scrolling="no"></iframe>
                    <map name="meumapa">
                        <area shape="rect" coords="176,218,268,244" href="google-glass.html#tela" target="janela"/>
                        <area shape="circle" coords="158,243,12" href="google-glass.html#camera" target="janela">
                        <area shape="circle" coords="76,51,12" href="google-glass.html#gadgets" target="janela">
                        <area shape="poly" coords="26,146,81,216,80,251,24,168" href="google-glass.html#sensores" target="janela">
                    </map>
                </section>
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