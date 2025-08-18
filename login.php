<?php
ini_set("session.cookie_secure", 1);
session_start();
?>
<?php
require_once("conexao.php");
//verificando se é uma requisição post para efetuar o login
if (filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST") {
    try {
        $erros = [];
        $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        $sql = "select * from usuario where login = ?";

        $conexao = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . BANCO, USUARIO, SENHA);

        $pre = $conexao->prepare($sql);
        $pre->execute(array(
            $login
        ));

        $resultado = $pre->fetch();

        if (!$resultado) {
            throw new Exception("Login inválido!");
        } else {
            if (password_verify($senha, $resultado["senha"]) === false) {
                throw new Exception("Senha inválida!");
            } else {
                $_SESSION["usuario_id"] = $resultado["id"];
                $_SESSION["usuario"] = $resultado["nome"];
            }
        }

        header("HTTP 1/1 302 Redirect");
        header("Location: menu.php");
    } catch (Exception $e) {
        $erros[] = $e->getMessage();
        $_SESSION["erros"] = $erros;
    } finally {
        $conexao = null;
    }
}
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="./css/fontawesome/fontawesome.min.css" rel="stylesheet">
    <link href="./css/fontawesome/brands.min.css" rel="stylesheet">
    <link href="./css/fontawesome/solid.min.css" rel="stylesheet">
    <link href="./css/sistema/landpage.css" rel="stylesheet">
    <link href="./css/sistema/login.css" rel="stylesheet">
</head>

<body>
<header id="topo">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-success d-flex justify-content-between">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center me-2" href="index.php">
            <img src="imagens/logo.png" alt="Logo" class="img-fluid" style="max-height:40px;">
        </a>
    </div>
</nav>
    </header>
    <main class="form-signin">
        <?php
        if (isset($_SESSION["erros"])) {
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
            echo "<button type='button' class='btn-close btn-sm' data-bs-dismiss='alert'
                aria-label='Close'></button>";
            foreach ($_SESSION["erros"] as $chave => $valor) {
                echo $valor . "<br>";
            }
            echo "</div>";
        }
        unset($_SESSION["erros"]);
        ?>
        <form id="formlogin" action="login.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Realize Login</h1>
            <div class="form-floating mb-3">
                <input type="texto" class="form-control" id="login" name="login" maxlength="10" placeholder="Login" required="required"> <label for="login">Login
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="senha" name="senha" maxlength="15" placeholder="Senha"> <label for="senha">Senha</label>
            </div>
            <button class="w-100 btn btn-lg btn-success mb-3" type="submit">Logar</button>
        </form>
        <p class="text-center"><a href="cadastro_inicial.php">Cadastrar-se!</a></p>
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
    </footer>

    <script src="./js/jquery/jquery.min.js"></script>
    <script src="./js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./js/fontawesome/fontawesome.min.js"></script>
    <script src="./js/sistema/login.js"></script>
</body>

</html>