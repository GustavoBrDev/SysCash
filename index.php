<!doctype html>
<html lang="pt-BR">

<head>
    <title>Syscash</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./css/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="./css/fontawesome/brands.min.css" rel="stylesheet">
    <link href="./css/fontawesome/solid.min.css" rel="stylesheet">
    <link href="./css/sistema/landpage.css" rel="stylesheet">
</head>

<body>
    <header id="topo">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-success d-flex justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center me-2" href="index.php">
            <img src="imagens/logo.png" alt="Logo" class="img-fluid" style="max-height:40px;">
        </a>

        <a href="login.php">
            <button type="button" class="btn text-black bg-white">Entrar</button>
        </a>
    </div>
</nav>
    </header>
    <main>
        <!-- Carrossel de itens -->
        <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="imagens/contasAReceber.jpg" width="100%" height="100%">
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Contas a Receber</h1>
                            <p>Controle os seus recebimentos</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="imagens/fonte.jpg" width="100%" height="100%">
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Fontes</h1>
                            <p>Cadastre a fonte de seus recebimentos e pagamentos</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="imagens/contasAPagar.jpg" width="100%" height="100%">
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Contas a Pagar</h1>
                            <p>Controle os seus pagamentos</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrossel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrossel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Próximo</span>
            </button>
        </div>
        <!-- Fim carrossel de itens -->
        <!-- ================================================== -->
        <!-- Conteúdo da página -->
        <div class="container marketing">
            <!-- Três colunas complementares com os dados do carrossel -->
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle d-flex justify-content-center align-content-center" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Contas a Receber</title>
                        <img src="imagens/icones/contasAReceberIcon.png" width="50%" height="50%" />
                    </svg>
                    <h2>Contas a Receber</h2>
                    <p>Controle os seus recebimentos</p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle d-flex justify-content-center align-content-center" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Favorecidos</title>
                        <img src="imagens/icones/fonteIcon.png" width="50%" height="50%" />
                    </svg>
                    <h2>Fontes</h2>
                    <p>Cadastre a fonte de seus recebimentos e pagamentos</p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle d-flex justify-content-center align-content-center" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Contas a Pagar</title>
                        <img src="imagens/icones/contasAPagarIcon.png" width="50%" height="50%" />
                    </svg>

                    <h2>Contas a Pagar</h2>
                    <p>Controle os seus pagamentos</p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- Fim três colunas -->

            <hr class="featurette-divider">

            <!-- Restante conteúdo -->
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">
                        Um novo sistema, <span class="text-muted">para o controle de suas finanças.</span>
                    </h2>
                    <p class="lead">Controle suas finanças de forma efetiva!</p>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-content-center">
                    <img src="imagens/logo.png" alt="Logo" class="img-fluid mx-auto" width="500" height="500">
                </div>
            </div>
            <!-- Fim restante conteúdo -->
        </div>
        <!-- Fim conteúdo da página -->
    </main>
    <footer class="container">
        <hr class="featurette-divider">
        <p class="float-end">
            <a href="#topo">Voltar ao topo</a>
        </p>
        <p>
            &copy; 2021–<script>
                document.write(new Date().getFullYear())
            </script>
            | Syscash - O Seu Sistema de Finanças | <a href="https://github.com/GustavoBrDev">Gustavo Stinghen</a> & Alexandre -
            <a href="https://www.youtube.com/channel/UCUeidwLoy7YK4kEeuq2sPgw" target="_blank">Peregrino de TI</a>
        </p>
        <div class="text-center">
            <p>
                <img src="./imagens/cc-by-nc_icon_100.svg.png" title="Creative Commons" />
            </p>
        </div>
    </footer>

    <script src="./js/jquery/jquery.min.js"></script>
    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./js/fontawesome/fontawesome.min.js"></script>
</body>

</html>