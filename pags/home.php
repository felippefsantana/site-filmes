<?php 

session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:../index.php');
}

$logado = $_SESSION['login'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="shortcut icon" href="../img/icon/favicon.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Home</title>
	<style type="text/css">
		.espacamento{
			margin: 5%;
		}
		.tamanho img{
			width: 410px;
			height: 550px;
			border-radius: 5%;
			-webkit-box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
      -moz-box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
      box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
		}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">MyFLIX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="filmes.php">Filmes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="series.php">Séries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="perfil.php">Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../php/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!-- ****************************INICIO DO CARROSEL***************************** -->
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel" style="margin-top: 4%;">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="../img/banner1.jpg" alt="First slide" height="600px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Vingadores: Ultimato</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="../img/banner2.png" alt="Second slide" height="600px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Aquaman</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="../img/banner5.png" alt="Third slide" height="600px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Chernobyl</h3>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!-- ***************************FIM DO CARROSEL************************** -->

<!-- **************************INICIO DA GALERIA*************************** -->
<!-- Grid row -->
<div class="row espacamento">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/rampage.png" alt="arranhaceu"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/cmarvel.png" alt="capitã marvel"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/godzilla.png" alt="godzilla 2"></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row espacamento">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/dtpikachu.png" alt=""></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/dragon2.png" alt=""></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/dory.png" alt=""></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row espacamento">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/or.png" alt=""></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/GofT.png" alt=""></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4 tamanho">

    <a href="#" ><img class="img-fluid z-depth-1" src="../img/chernobly.png" alt=""></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>