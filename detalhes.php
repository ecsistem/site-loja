<?php
session_start ();
include_once("conexao.php");

$id_produto = $_GET['id_produto'];
$result_produtos = "SELECT * FROM produtos WHERE id='$id_produto'";
$resultado_produtos = mysqli_query ($conexao, $result_produtos);
$row_produtos = mysqli_fetch_assoc($resultado_produtos); ?>

<!-- while($row_produtos = mysqli_fetch_array($resultado_produtos)): ?> -->




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home | Loja Maria Paula</title>

    <link href="css/estiloHome.css" rel="stylesheet">
    <link href="css/estiloPostagem.css" rel="stylesheet">
    
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <header>
  <!-- ------------------------------MENU ---------------------------------------------->       
      <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="#"><img src="images/logo/PAT___GLOW-removebg-preview.png" alt="logo"></a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="produtos/adulto.php">Adulto</a>
                      <a class="dropdown-item" href="produtos/crianca.php">Criança</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="produtos/acessorios.php">Acessorios</a>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="contato.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrinho.php">Carrinho</a>
                  </li>
              </ul>
              <form class="form-inline my-0 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav>
      </div>
    <!-- ------------------------------ MENU ---------------------------------------------->  

    <!-- RESULTADO DO CLIQUE -->
<div class="container theme-showcase" role="main">
<div class="page-header">
  <h1><?= $row_produtos['nome'] ?> </h1>
  <h5> <?php echo $row_produtos['valor'] ?> </h5>
  <!--IMAGEM MOSTRAR AQUI -->
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
</head>
</html>