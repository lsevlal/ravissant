<?php
require_once __DIR__ . "/src/autoload.php";

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Produtos</title>
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
<!--Navbar-->
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
          <a class="nav-link" aria-current="page" href="sobrenos.php">
            <strong>Sobre nós</strong>
          </a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link active" href="produtos.php">
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

<!--Catálogo-->
<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5 mb-5">
    <div class="col">
      <div class="card option">
        <h3 class="titulo-categoria">Alianças</h3>
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpurepng.com%2Fpublic%2Fuploads%2Flarge%2Fpurepng.com-golden-ringjewelryjewellerybroochesringsnecklacesearringsearringsornamentsflowers-1701528880053ttjir.png&f=1&nofb=1&ipt=566501a6e121825b2bbbb1e3a50e778fe11fef3a27743b79a0e4752a743728ac&ipo=images"
             alt="Anéis de casamento"
             class="imgCatalogo"/>
        <br/>
        <p class="descricao-produto">Celebre a união de duas almas.</p>
        <button class="botao-conferir">Conferir</button>
      </div>
    </div>

    <div class="col">
      <div class="card option">
        <h3 class="titulo-categoria">Braceletes</h3>
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngall.com%2Fwp-content%2Fuploads%2F7%2FSilver-Bracelet-PNG-Clipart.png&f=1&nofb=1&ipt=3ca91d6428451244d917417153aa430b202833ac328966ed46fd0ad226e262d8&ipo=images"
             alt="Braceletes"
             class="imgCatalogo"/>
        <p class="descricao-produto">Braceletes deslumbrantes.</p>
        <br/>
        <button class="botao-conferir">Conferir</button>
      </div>
    </div>

    <div class="col">
      <div class="card option">
        <h3 class="titulo-categoria">Colares</h3>
        <img src="http://pngimg.com/uploads/necklace/necklace_PNG65.png"
             alt="Colares"
             class="imgCatalogo" />
        <p class="descricao-produto">Elegância ao seu visual diário.</p>
        <br/>
        <button class="botao-conferir">Conferir</button>
      </div>
    </div>

    <div class="col">
      <div class="card option">
        <h3 class="titulo-categoria">Relógios</h3>
        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.pngmart.com%2Ffiles%2F3%2FLadies-Watch-Transparent-PNG.png&f=1&nofb=1&ipt=d9381062a534b12d6aed9d435209b3372f1a705aaff27a3955e37f3769453efb&ipo=images"
             alt="Relógios femininos"
             class="imgCatalogo" />
        <p class="descricao-produto">Do clássico ao contemporâneo.</p>
        <br/>
        <button class="botao-conferir">Conferir</button>
      </div>
    </div>
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