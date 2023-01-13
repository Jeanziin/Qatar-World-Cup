<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/painel.css">
    <title>QATAR Copa do Mundo 2022</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="./css-painel/style.css" />
</head>

<body>
    <section id="mascote">
        <header class="header">
            <div class="container">
                <nav class="navegar">
                    <a href="painel.php" class="logo">
                        <img src="imagens/logo.svg" alt="Logo" class="logo-img" />
                    </a>
                    <div class="mobile-menu-icone">
                        <ion-icon name="menu-outline" class="menu_icon"></ion-icon>
                    </div>
                    <ul class="nav_menu">
                        <li class="nav_lista">
                            <a href="#!" class="nav_link ativo">Início</a>
                        </li>

                        <li class="nav_lista">
                            <a href="./seuspalpites.php" class="nav_link" target="_matches">Seus Palpites
                            </a>
                        </li>
                        <li class="nav_lista">
                            <span class="nav_link">Bem-vindo ao Painel <?php echo $_SESSION['email']; ?></span>
                        </li>
                        <li class="nav_lista btn-nav">
                            <a href="./palpites.php?r=palpites&tipo=1 rodada" class=" btn-outline">
                                <span>Faça os seus Palpites</span>
                                <ion-icon name="compass-outline"></ion-icon>
                            </a>
                        </li>
                        <a id="iconlink" href="logout.php"><i class="fa-solid icon fa-right-from-bracket"></i></a>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="hero-main-container">
            <div class="container">
                <div class="hero-container">
                    <div class="hero-content">
                        <h1 class="section-heading">
                            Seu Sonho <br /> Começa Aqui!
                        </h1>
                        <p class="paragraph">
                            Acompanhe os jogos da Copa do Mundo e explore todo o Qatar!
                        </p>
                        <a href="./palpites.php" class="btn-primary">
                            <span>Palpite Já!</span>
                            <ion-icon name="log-out-outline"></ion-icon>
                        </a>
                        <div class="worldcup-count-down">
                            <div class="count">
                                <span class="count-time">A COPA</span>
                            </div>
                            <div class="count">
                                <span class="count-time">DO MUNDO </span>
                            </div>
                            <div class="count">
                                <span class="count-time">JÁ</span>
                            </div>
                            <div class="count">
                                <span class="count-time">COMEÇOU!</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="imagens/mascot.png" alt="hero-img" class="hero-img" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="youtube">
                    <div>
                        <iframe width="720" height="520" src="https://www.youtube.com/embed/wVmdKESyg9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="telaPrincipal">

        <header id="meheader">
            <h1 id="h1">Copa do Mundo Catar 2022</h1>
            <nav id="nav">
                <ul class="menu">
                    <li><a id="btnGrupos" class="" onClick="">Grupos</a></li>
                    <li><a class="" onClick="renderizarJogos(1)">1</a></li>
                    <li><a class="" onClick="renderizarJogos(2)">2</a></li>
                    <li><a class="" onClick="renderizarJogos(3)">3</a></li>
                    <li><a class="" onClick="renderizarFinais('finais')">Fase Final</a></li>
                </ul>
            </nav>
        </header>

        <div id="divGrupo">
            <h2 id="h2">Grupos</h2>
            <!-- preenchida pelo js listas das selecoes por grupo -->
            <section class="listas"></section>
        </div>

        <h2 id="h2">Tabela de Jogos</h2>

        <div id="divRodadas" class="div">
            <h3><span class="rodada"></span></h3>
            <!-- fase de grupos 1, 2, 3 rodada -->
            <section class="tabelaDeJogos"></section>
        </div>

        <div id="divFinais" class="div">
            <h3>Fases Finais</h3>
            <!-- fases finais -->
            <section class="tabelaDeJogosFinais"></section>
        </div>
        <!-- /preenchida pelo js  -->

        <!-- modelos de listaDoGrupo -->
        <div class="modelo">
            <section class="listaDoGrupo">
                <h3 class="tituloDoGrupo">Grupo</h3>
                <ol class="listaDeSelecoes">
                    <li><img class='bandeirap' src='../images/bandeiras/escudo_default.png' alt='bandeira' />
                        Nome da Seleção 1</li>
                    <li><img class='bandeirap' src='../images/bandeiras/escudo_default.png' alt='bandeira' />
                        Nome da Seleção 2</li>
                    <li><img class='bandeirap' src='../images/bandeiras/escudo_default.png' alt='bandeira' />
                        Nome da Seleção 3</li>
                    <li><img class='bandeirap' src='../images/bandeiras/escudo_default.png' alt='bandeira' />
                        Nome da Seleção 4</li>
                </ol>
            </section>
            <!-- /modelo de listaDeGrupos -->

            <!-- modelo .listaDejogos -->
            <section class="listaDeJogos">
                <article class="jogo">
                    <h3 class="grupo"></h3>
                    <h5 class="data"></h5>
                    <h3 class="partida"></h3>
                    <h5 class="estadio"></h5>
                </article>
            </section>

            <!-- modelo .listaDejogosFinais -->
            <section class="listaDeJogosFinais">
                <article class="jogo">
                    <h3 class="fase"></h3>
                    <h5 class="data">Data</h5>
                    <h3 class="partida">XYZ x ZYX</h3>
                    <h5 class="estadio">Estádio</h5>
                </article>
            </section>
        </div>

        <div class="inferiorDireita">
            <button class="btn btnTopo" id="irTopo">&UpArrow;</button>
        </div>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>