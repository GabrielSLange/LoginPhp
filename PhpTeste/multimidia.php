<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Tudo sobre Google Glass</title>
    <link rel="stylesheet" href="_css\estilo.css"> 
    <link rel="stylesheet" href="_css/media.css">   
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
            <img id="icone" src="_imagens/multimidia.png"/>
            
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
                        <h3>Glass > Multimídia</h3>
                        <h1>Sons e Vídeos</h1>
                        <h2>por Gabriel Lange</h2>
                        <h3 class="direita">Atualizado em 05/Maio/2022</h3>
                    </hgroup>
                </header>

               <div id="tv-radio">
                   <audio id="musica" controls>
                        <source src="_media/2009-lovers-carvings-bibio.mp3" type="audio/mpeg"/>
                        <source src="_media/2009-lovers-carvings-bibio.ogg" type="audio/ogg"/>
                            Não foi possível carregar o audio.
                   </audio>
                   <iframe id="youtube1" width="560" height="315" src="https://www.youtube.com/embed/4EvNxWhskf8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>

            </article>
        </section>
        <footer id="rodape">
            <p>2022 - by Gabriel Lange <br/>
                <a href="https://www.facebook.com/gabilange.lange" target="_blank">Facebook</a> 
                <a href="https://www.instagram.com/1lg_gabriel/" target="_blank">Instagram</a>
            </p>
        </footer>
    </div>
</body>
</html>