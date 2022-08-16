<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Tudo sobre Google Glass</title>
    <link rel="stylesheet" href="_css/estilo.css">    
    <link rel="stylesheet" href="_css/fotos.css">
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
            <img id="icone" src="_imagens/fotos.png"/>
            
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
                        <h3>Glass > Fotos</h3>
                        <h1>Galeria de Imagens do Google Glass</h1>
                        <h2>por Gabriel Lange</h2>
                        <h3 class="direita">Atualizado em 03/Maio/2022</h3>
                    </hgroup>
                </header>
            
            
                <p> Veja na nossa galeria de fotos várias belas imagens que mostram algumas das principais características do Google Glass, como recursos e propriedades que estão impressionando o mundo inteiro. Basta passar o mouse sobre uma das fotos para ver uma versão ampliada e com uma breve descrição.</p>

                <ul id="album-fotos">
                    <li id="foto01"><span> Agenda e lembretes</span></li>
                    <li id="foto02"><span> Sergey Brin usando o Glass</span></li>
                    <li id="foto03"><span> Leve e compacto</span></li>
                    <li id="foto04"><span> Sensação de uma tela de 50"</span></li>
                    <li id="foto05"><span> Vários tipos de lente</span></li>
                    <li id="foto06"><span> Informações importantes</span></li>
                </ul>
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