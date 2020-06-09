<?php 

session_start();
include('../php/conexao.php');

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
	<title>Perfil</title>
	<style type="text/css">
		.espacamentoPerfil{
			margin-top: 7%;
			border-radius: 15px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="home.php">MyFLIX</a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
	 </button>
	 <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="filmes.php">Filmes</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="series.php">Séries</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Perfil</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../php/logout.php">Logout</a>
	      </li>
	    </ul>
	 </div>
</nav>

<div class="container espacamentoPerfil">
<table class="table table-dark">
	<h2><?php echo $_SESSION['login'] ?></h2>
  <thead>
    <tr>
    <?php 

    $sql = "SELECT * FROM usuario WHERE usuario = '$logado' LIMIT 1";
    $busca = mysqli_query($conection, $sql);

    while ($array = mysqli_fetch_array($busca)) {
    	$id = $array['id'];
    	$nome = $array['nome'];
    	$usu = $array['usuario'];
    	$email = $array['email'];
    	$senha = $array['senha'];
    

    ?>
      <th scope="col">Nome</th>
      <th scope="col"><?php echo $nome;?></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Usuário</th>
      <th scope="col"><?php echo $usu;?></th>
    </tr>
    <tr>
      <th scope="row">E-mail</th>
      <th scope="col"><?php echo $email;?></th>
      <?php 
      	}
       ?>
    </tr>
  </tbody>
</table>
<div class="container">
	<div style="text-align: right;">
	    <a href="editar.php?id=<?php echo $id ?>"><button type="submit" class="btn btn-sm btn-success">Editar</button></a>
	    <a href="../php/deletar.php?id=<?php echo $id ?>"><button type="submit" class="btn btn-sm btn-success">Excluir conta</button></a>
	</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>