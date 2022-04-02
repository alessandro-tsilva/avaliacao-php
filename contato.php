<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Formulário de Contato</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script>
   (function() {
            'use strict';
            window.addEventListener('load', function() {
            var form = document.getElementById('needs-validation');
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
            form.classList.add('was-validated');
        }, false);
    }, false);
    })();
    </script>
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
            <div class="col-sm-4"></div>
            <article class="col-12">
                <h3 id="formulario">Formulário de Contato</h3>
                <form action="#" method="post" id="needs-validation" novalidate>
                <div class="form-group row"> 
                    <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome*</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nome" placeholder="Digite seu nome" required>
                        <small id="nomehelp" class="invalid-feedback">
                        Campo nome obrigatório.
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail*</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control form-control-sm" id="email" placeholder="Digite seu email" required>
                        <small id="emalhelp" class="invalid-feedback">
                        Campo e-mail obrigatório.
                        </small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem*</label>
                    <div class="col-sm-10">
                        <textarea class="form-control form-control-sm" id="mensagem" required></textarea>
                        <small id="mensagemhelp" class="invalid-feedback">
                        Campo mensagem obrigatório.
                        </small>
                        <button type="submit" class="btn btn-primary my-1">Enviar</button>
                        <small id="help" class="form-text text-muted">
                        * Campos obrigatórios.
                        </small>
                    </div>
                </div>
                </form>
            </article>
        </section>
        <footer class="row" id="rodape">
            <div class="col-sm-6">
                <a href="#menu" accesskey="1">Voltar ao menu [1]</a>
            </div>    
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>
</body>
</html>