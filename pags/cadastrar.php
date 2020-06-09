<?php 



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../img/icon/favicon.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Cadastrar</title>
	<style type="text/css">
    #tamanho{
      width: 50%;
      -webkit-box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
      -moz-box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
      box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
    }
  </style>
</head>
<body>
	<div class="container" id="tamanho" style="margin-top: 7%; margin-bottom: 7%; border-radius: 15px; border: 2px solid #f3f3f3">
		<center>
      		<img src="../img/icon/icon-usu.png" width="100px" style="padding-top: 5%">
    	</center>
		<div style="padding: 5%">
			<form action="../php/salvar.php" method="post">
				<div class="form-group">
					<label>Nome Completo:</label>
					<input type="text" name="nome" class="form-control" placeholder="Nome Completo" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Nome de Usuário:</label>
					<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Endereço de E-mail:</label>
					<input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Senha:</label>
					<input id="txtSenha" type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Confirme a senha:</label>
					<input type="password" name="rsenha" class="form-control" placeholder="Repetir senha" autocomplete="off" required oninput="validaSenha(this)">
				</div>
				<div style="text-align: right;">
	        		<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
	      		</div>
			</form>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
	function validaSenha(input){
		if(input.value != document.getElementById('txtSenha').value){
			input.setCustomValidity('Repita a senha corretamente');
		} else{
			input.setCustomValidity('');
		}
	}
</script>
</body>
</html>