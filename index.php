<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Personagens Disney | Página Inicial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <main class="container mx-auto mt-1 w-90">
        <header class="row">
            
            <div class="col-sm-2">   
                <img src="images/mickey_mouse.jpg" alt="Rosto de Mickey Mouse sorrindo">
            </div>
            <div class="col-sm-6">
                <h1>Personagens Disney</h1>
                <h3>Curiosidades da nossa infância</h3>
            </div>
            <div class="col-sm-4" id="barra_acessibilidade">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir ao menu [1]</a></li>
                    <li><a href="#rodape" accesskey="2">Ir ao final [2]</a></li>
                </ul>   
            </div>  
        </header>
        <br>
        <section class="row" id="menu">
            <div class="col-sm-12">
                <h4 class="d-none">Menu</h4>
            </div>
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto" >
                            <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="personagens.php">Personagens</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="curiosidades.php">Curiosidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="links.php">Links</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <br>
            </div>
            <br>
            <p class="col-sm-12"> Muitos personagens de desenho animado marcaram a nossa infância. A geração dos anos 1970 e 1980 ficou marcada, principalmente, pelos personagens da Disney como Mickey Mouse, Pato Donald, Minie e Pateta. Inúmeras foram as contribuições para a diversão sadia e garantida que estes desenhos proporcionaram com suas aventuras e trapalhadas. De qualquer forma, a lembrança gostosa e feliz ficou na memória de muita gente.</p>
            <div class="col-sm-12">
            <img src="images/mickey-donald-goofy.png" class="img-fluid rounded mx-auto d-block" alt="Mickey, Pato Donald e Pateta">
            </div>
            <p class="col-sm-12">Mickey e Donald foi um quadro exibido pela TV Globo, que exibia desenhos clássicos dos personagens da Turma do Mickey, produzidos por Walt Disney. Era exibido inicialmente desde 1995 até 1998 em programas infantis como a TV Colosso e Angel Mix, depois permaneceu um tempo fora do ar, porque o SBT adquiriu os direitos sobre os desenhos do Mickey, passando a exibi-los no Disney Club. Os desenhos de "Mickey e Donald" permaneceram no SBT durante 1999 até o ano de 2004, e no ano de 2005 voltaram para a Globo dentro da TV Xuxa, e depois na TV Globinho.
            <p class="col-sm-12">Neste site, vamos conhecer algumas curiosidades sobre eles. Use o menu para navegar entre as páginas.</p>
            <br>
            <h4 class="col-sm-12">Para conhecer alguns nomes de personagens, clique numa letra abaixo:</h4>

            <div class="btn-toolbar col-sm-6" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary" id="button_a" onclick="fbutton_a()">A</button>
                    <button type="button" class="btn btn-primary" id="button_b" onclick="fbutton_b()">B</button>
                    <button type="button" class="btn btn-primary" id="button_c" onclick="fbutton_c()">C</button>
                    <button type="button" class="btn btn-primary" id="button_d" onclick="fbutton_d()">D</button>
                    <button type="button" class="btn btn-primary" id="button_e" onclick="fbutton_e()">E</button>
                    <button type="button" class="btn btn-primary" id="button_f" onclick="fbutton_f()">F</button>
                    <button type="button" class="btn btn-primary" id="button_g" onclick="fbutton_g()">G</button>
                    <button type="button" class="btn btn-primary" id="button_h" onclick="fbutton_h()">H</button>
                    <button type="button" class="btn btn-primary" id="button_i" onclick="fbutton_i()">I</button>
                    <button type="button" class="btn btn-primary" id="button_j" onclick="fbutton_j()">J</button>
                    <button type="button" class="btn btn-primary" id="button_m" onclick="fbutton_m()">M</button>
                    <button type="button" class="btn btn-primary" id="button_p" onclick="fbutton_p()">P</button>
                </div>
                <div id="aparece_nome"></div>
            </div>
        </section>
        <footer class="row" id="rodape">
            <div class="col-sm-6">
                <br>
                <a href="#menu" accesskey="1">Voltar ao menu [1]</a>
            </div>    
        </footer>
    </main>
    <script src="nomes.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>
</body>
</html>