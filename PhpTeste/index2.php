<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Tudo sobre Google Glass</title>
    <link rel="stylesheet" href="_css\estilo.css">    
    <script language="javascript" src="_javascript\funcoes.js"></script>
    <?php
        session_start();
        include('conexao.php');
        include('verifica_login.php');
    ?>
</head>
<body>
    <div id="interface">
        <header id="cabecalho">
            <hgroup>
                <h1>Google Glass</h1>
                <h2>A revolução do Google está chegando</h2>
                <br/><br/>
                <img id="icone" src="_imagens\glass-oculos-preto-peq.png"/>
            </hgroup>
            
            
            
            <nav id="menu">
                <h1>Menu Principal</h1>
                <ul>
                <li>Olá, <?php echo ($_SESSION['usuario']); ?></li>
                <li onmousemove="MudaFoto('_imagens/home.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="index1.php">Home</a></li>
                <li onmousemove="MudaFoto('_imagens/especificacoes.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="specs.php">Especificações</a></li>
                <li onmousemove="MudaFoto('_imagens/fotos.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="fotos.php">Fotos</a></li>
                <li onmousemove="MudaFoto('_imagens/multimidia.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="multimidia.php">Multimídia</a></li>
                <li onmousemove="MudaFoto('_imagens/contato.png')" onmouseout="MudaFoto('_imagens/glass-oculos-preto-peq.png')"><a href="fale-conosco.php">Fale conosco</a></li>
                <li><a href="logout.php">Sair</a></li>
                </ul>
            </nav>
        </header>

        <section id="corpo">
            <article id="noticia-principal">
                <header id="cabecalho-artigo">
                    <hgroup>
                        <h3>Tecnologia > Inovações</h3>
                        <h1>Saiba tudo sobre o Google Glass</h1>
                        <h2>por Gabriel Lange</h2>
                        <h3 class="direita">Atualizado em 26/Abril/2022</h3>
                    </hgroup>
                </header>
                <h2>O que é</h2>
                <p> O <span style="font-weight:900;">Google Glass </span> é um acessório em forma de óculos que possibilita a interação dos usuários com diversos conteúdos em realidade aumentada. Também chamado de <a href="https://www.google.com/glass/start/" target="_blank">Project Glass</a>, o eletrônico é capaz de tirar fotos a partir de comandos de voz, enviar mensagens instantâneas e realizar vídeo&shy;con&shy;ferên&shy;cias. Seu lançamento está previsto para 2014, e seu preço deve ser de US$ 1,5 mil. Atualmente o <em>Google Glass</em> encontra-se em fase de testes e já possui um vídeo totalmente gravado com o dispositivo. Além disso, a companhia de buscas registrou novas patentes anti-furto e de desbloqueio de tela para o acessório.</p>
                <figure class="foto-legenda">
                    <img  src="_imagens\glass-quadro-homem-mulher.jpg"/>
                    <figcaption>
                        <h3>Google Glass</h3>
                        <p>Uma nova maneira de ver o mundo.</p>
                    </figcaption>
                </figure>
                <h2>Data de lançamento</h2>
                <p>Não há uma data específica e oficial para o dispositivo ser lançado, ainda. Pode ser que ele esteja disponível em demonstrações a partir de 2013, mas seu lançamento para as lojas fica para, pelo menos, 2014.</p>

                <h2>Especificações Técnicas</h2>
                <table id="tabela">
                    <caption>Tabela Técnica do Google Glass <span>Mar/2013</span></caption>
                        
                    <tr><td class="ce">Tela</td><td class="cd">Resolução equivalente a tela de 25</td></tr>
                    <tr><td rowspan="2" class="ce">Camera</td><td class="cd">5MP para fotos</td></tr>
                    <tr><td class="cd">720p para vídeos</td></tr>
                    <tr><td rowspan="2" class="ce">Conectividade</td><td class="cd">Wi-Fi</td></tr>
                    <tr><td class="cd">Bluetooth</td></tr>
                    <tr><td  class="ce">Memória Interna</td><td class="cd">12GB</td></tr>
                </table>        
                
                <h2>Como funciona</h2>
                <P>De acordo com fontes próximas do Google, os óculos vão contar com uma pequena tela de LCD ou AMOLED na parte superior e em frente aos olhos do usuário. Com o uso de uma câmera e GPS, você pode se situar, assim como selecionar opções com o movimento da cabeça</P>

                <h2>O que você pode fazer com o Google Glasses</h2>
                <p>O vídeo de divulgação do Google mostra que você pode se transformar em uma espécie de “super-<wbr/>humano”, já que o aparelho pode indicar a quantos metros você está de seu destino, se o metrô está aberto ou fechado, mostrar o clima, agenda e até mesmo permitir que você marque encontros apenas com comandos de voz.</p>

                <div>
                    <iframe id="video-principal" width="560" height="315" src="https://www.youtube.com/embed/hIuVb2MzwDA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </article>
        </section>
        <aside id="lateral">
            <h1>Outras Notícias</h1>
            Vídeo mais recente

            <div>
                <iframe id="video-lateral" width="560" height="315" src="https://www.youtube.com/embed/5dYpTWJVvT8?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <h2>Novidades no Glass</h2>
            <p>O Google enfim revelou as especificações completas do Google Glass, e com ele uma surpresa ainda inédita no mercado: a gigante das buscas usará um sistema de áudio baseado na transdução por condução. Através das hastes dos óculos, o som será transmitido para o ouvido do usuário por meio de microvibrações em determinados ossos de sua cabeça, sem usar nenhum tipo de alto-falante.</p>

            <p>Além da surpresa do áudio, a tela montada a frente do olho do usuário também chamou atenção. Serão 640 x 360 pixels de resolução que, em proporção, equivaleria a um monitor de 25 polegadas de alta definição colocado a 2,5 metros de distância do espectador.</p>
        </aside>
        <footer id="rodape">
            <p>2022 - by Gabriel Lange <br/>
                <a href="https://www.facebook.com/gabilange.lange" target="_blank">Facebook</a> | 
                <a href="https://www.instagram.com/1lg_gabriel/" target="_blank">Instagram</a>
            </p>
        </footer>
    </div>
</body>
</html>