<?php
require_once __DIR__ . "/src/autoload.php";
session_start();

$mensagemErro = null;

function logar($email, $senha) {
    global $entityManager, $mensagemErro;

    $query = $entityManager->createQuery("SELECT u FROM Usuario u WHERE u.email = :email AND u.senha = :senha")
    ->setParameter(":email", $email)
    ->setParameter(":senha", $senha);

    $usuario = $query->getOneOrNullResult();
    if ($usuario === null){
        $mensagemErro = "Email e/ou senha incorreta!";
    } else {
        $_SESSION["nome"] = $usuario->nome;
        $_SESSION["isLogado"] = true;
        redirect("/index.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    logar($_POST["email"], $_POST["senha"]);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous"/>
</head>

<body>
<!-- Header-->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo-site.png" alt="Ravissant Jóias" width="75px"/>
        </a>
    </div>
</nav>

<!--Form de Login-->
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-10 mx-auto col-lg-10">
            <div class="p-4 p-md-5 border rounded-3 bg-purple text-center shadow p-3 mb-5">
                <form method="POST" action="<?php echo $url; ?>">

                    <!--Título do Form-->
                    <p class="h2 mb-3"><strong>Login</strong></p>
                    <p class="mb-3">Entre com sua conta</p>

                    <!--Inputs-->
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control w-100" id="inputLoginEmail" required />
                        <label for="inputLoginEmail">E-mail</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="senha" type="password" class="form-control w-100" id="inputLoginPassword" required />
                        <label for="inputLoginPassword">Senha</label>
                    </div>

                    <!--Botão Entrar tipo submit-->
                    <input class="btn btn-lg btn-dark mb-4 shadow-lg w-100" type="submit" value="Entrar"/>
                </form>

                <hr>
                <br>

                <button class="btn btn-lg btn-dark mb-4 shadow-lg w-100" type="submit"><i class="fa-brands fa-facebook-f"></i> Entrar com Facebook</button>

                <button class="btn btn-lg btn-dark mb-4 shadow-lg w-100" type="submit"><i class="fa-brands fa-google-plus-g"></i> Entrar com Google</button>

                <div>
                    <p><a href="#" class="text-decoration-none">Esqueci minha senha</a></p>
                    <a href="cadastro.php" class="text-decoration-none">Não tenho uma conta</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Rodapé-->
<footer class="text-center text-lg-start bg-light text-muted">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">© Todos os direitos reservados.</div>
</footer>
<?php if (isset($mensagemErro)) { ?>
  <script>alert("<?php echo $mensagemErro; ?>");</script>
<?php } ?>
</body>
</html>