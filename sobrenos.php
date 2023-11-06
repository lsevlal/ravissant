<?php
require_once __DIR__ . "/src/autoload.php";

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre nós</title>
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/estilo_SobreNos.css" />
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
<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous">
</script>
</head>
<body>
<!---Cabeçalho--->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo-site.png" alt="Ravissant Jóias" width="75px"/>
    </a>
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
        <li class="nav-item me-5">
          <a class="nav-link active" aria-current="page" href="sobrenos.php">
            <strong>Sobre nós</strong>
          </a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="produtos.php">
            <strong>Nossos produtos</strong>
          </a>
        </li>
        <form class="d-flex">
          <input class="form-control me-4"
                 type="search"
                 placeholder="Procurar..."
                 aria-label="Search"/>
        </form>
        <li class="nav-item me-2">
          <a class="nav-link" href="login.php">
            <img src="img/usuario.png" alt="Usuário" width="25px"/>
          </a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="#">
            <img src="img/carrinho.png" alt="Carrinho" width="25px"/>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!---Modelo do Banner--->

<div class="d-flex justify-content-center">
  <img
          src="img/foto-modelo-preenchido.png"
          alt="Foto de uma modelo"
          width="2300px"
  />
</div>

<!---Início da página--->

<div style="padding-left: 10%; padding-right: 10%">
  <h1>Quem Somos</h1>

  <h2>Bem-vinda à Ravissant - Sua Janela para o glamour!</h2>

  <p id="p-site">
    No coração do Rio de Janeiro, mergulhamos na rica herança cultural e na
    beleza intemporal dessa cidade extraordinária para trazer até você uma
    seleção cuidadosamente escolhida de joias deslumbrantes. Nossa paixão
    por acessórios elegantes e únicos nos levou a criar um espaço onde você
    pode encontrar peças que capturam a essência do estilo carioca.
  </p>

  <h1>Nossa Missão</h1>

  <p id="p-site">
    Nosso objetivo é oferecer uma experiência de compra de joias online que
    combine conveniência, qualidade e elegância. Ainda que não fabriquemos
    as peças, cada item em nossa coleção é selecionado com um olhar atento
    para o design e a qualidade. Buscamos fornecer a você uma curadoria de
    joias que celebrem a individualidade e realcem a sua beleza pessoal.
  </p>

  <h1>A Experiência Ravissant</h1>

  <p id="p-site">
    Navegar em nossa loja é como explorar uma galeria de tesouros
    brilhantes. A simplicidade da nossa plataforma online é projetada para
    que você possa encontrar facilmente a joia perfeita para cada ocasião.
    Desde anéis deslumbrantes até colares elegantes e brincos encantadores,
    nossa coleção oferece uma variedade de opções para se adequar ao seu
    gosto pessoal.
  </p>

  <h1>Nosso Compromisso com Você</h1>

  <p id="p-site">
    Embora não fabriquemos as joias, garantimos que cada peça em nosso site
    atenda aos mais altos padrões de qualidade. Valorizamos a sua confiança
    em nós e estamos comprometidos em fornecer um atendimento ao cliente
    excepcional. Seja para tirar dúvidas sobre produtos ou para auxiliá-lo
    em suas escolhas, nossa equipe está pronta para ajudar em cada passo do
    caminho.
  </p>
  <p>
    Estamos empolgados por você ter escolhido Ravissant como sua fonte de
    elegância. Explore nossa coleção e descubra como podemos adicionar um
    toque de brilho aos seus momentos especiais.
  </p>

  <br />

  <!----Assinatura da empresa--->

  <div style="text-align: right">
    <p>
      Com gratidão,<br />
      A Equipe do Ravissant
    </p>
  </div>
</div>

<div class="container-fluid">
  <hr />
  <h3><strong>Receba nossas novidades</strong></h3>
  <p id="p-3">
    Cadastre-se e receba em primeira mão os nossos<br />
    lançamentos, novas promoções e inspirações
  </p>
  <form class="d-flex">
    <input
            class="form-control me-2"
            type="search"
            placeholder="E-mail"
            aria-label="Search"
    />
    <button class="cadastroNovidades">Enviar</button>
  </form>
  <p style="padding-top: 15px" id="p-4">
    <a href="contato.php" class="text-decoration-none fs-6">Fale conosco</a>
  </p>
  <div class="imagens-fim">
    <i class="fa-brands fa-instagram" style="font-size: 20px"></i>
    <i class="fa-brands fa-youtube" style="font-size: 20px"></i>
    <i class="fa-brands fa-facebook" style="font-size: 20px"></i>
  </div>
</div>

<footer class="text-center text-lg-start bg-light text-muted">
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">© Todos os direitos reservados.</div>
</footer>

</body>
</html>