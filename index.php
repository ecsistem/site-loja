<?php 

include_once("conexao.php");
$result_produtos = "SELECT * FROM produtos";
$resultado_produtos = mysqli_query ($conexao, $result_produtos);
$row_produtos = mysqli_fetch_assoc ($resultado_produtos);

?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home | Loja Maria Paula</title>

    <link href="css/estiloPostagem.css" rel="stylesheet">
	<link href="css/estiloHome.css" rel="stylesheet">
    
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <header>
  <!-- ------------------------------MENU ---------------------------------------------->       
      <div class="shadow-sm p-3 mb-5 bg-white rounded">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
		<!-- LOGO -->
            <a class="navbar-brand" href="#"><img src="images/logo/PAT___GLOW-removebg-preview.png" alt="logo"></a>
		<!-- /LOGO -->
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
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
    
    <!-- ------------------------------BANNER ---------------------------------------------->    
    <div class="shadow-sm p-3 mb-5 bg-white rounded">
          <div class="card bg-white text-dark">
            <img src="images/home/roupas-banner1.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title">WOMAN FASHION</h5>
            </div>
          </div>
    </div>
    </header>

    <!-- ------------------------------/BANNER ---------------------------------------------->    


 <!-- -------------------------------------------------------------------------------------------------------- -->
 <h2 class="title text-center">Produtos</h2>
 <div class="row">
 <?php while($rows_produtos = mysqli_fetch_assoc($resultado_produtos)) { ?>
 <div class="card border-light mb-3" style="width: 18rem; margin-left:45px; margin-bottom:15px;">
  <img class="card-img-top" src="images/home/product4.jpg" alt="Imagem de capa do card">
  <div class="card-body text-center">
   <a href="detalhes.php?id_produto=<?php echo $rows_produtos['id']; ?>"> <h6 class="card-title titulo"><?php echo $rows_produtos['nome']; ?></h6></a>
    
    <h5 class="card-text"> <?php echo $rows_produtos['valor']; ?> </h5>
    <a href="#">Adicionar ao carrinho</a>
  </div>
</div> 
    <?php } ?>
 </div>
 </div>
<!-- PHP E PRODUTOS ---------------------------------- -->

 <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->


<!--
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/home/product2.jpg" alt="Imagem de capa do card">
  <div class="card-body text-center">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/home/product1.jpg" alt="Imagem de capa do card">
  <div class="card-body text-center">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="images/home/product3.jpg" alt="Imagem de capa do card">
  <div class="card-body text-center">
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
    <a href="#" class="btn btn-primary">Visitar</a>
  </div>
</div>
    -->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-closset's</h2>
							<p>A maior loja de roupas de festas do Brasil</p>
						</div>
					</div>
					
				
				</div>
			</div>
		</div>
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://github.com/MariaPaulaAlcantara">Maria Paula</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
    

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
 
	
</body>
</html>

