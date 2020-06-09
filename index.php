<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/icon/favicon.png" />
	<meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<title>Login</title>
  <style type="text/css">
    #tamanho{
      width: 28%;
      -webkit-box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
      -moz-box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
      box-shadow: 10px 10px 28px 0px rgba(194, 194, 194, 1);
    }
  </style>
</head>
<body>
  <div class="container" id="tamanho" style="margin-top: 10%;border-radius: 5%; border: 2px solid #f3f3f3">
    <center>
      <img src="img/icon/icon-usu.png" width="100px" style="padding-top: 5%">
    </center>
    <div style="padding: 5%">
    <form method="post" action="php/verifica_login.php">
      <div class="form-group">
        <label>Usuário</label>
        <input type="text" name="login" class="form-control" placeholder="Usuário" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
      </div>
      <div style="text-align: right;">
        <button type="submit" class="btn btn-sm btn-success">Entrar</button>
      </div>
    </form>
    <center>
    <p style="margin: 5%">Não é cadastrado? Cadastre-se <a href="pags/cadastrar.php">aqui</a></p>
    </center>
    </div>
  </div>
	<!-- <form class="" method="post" action="php/verifica_login.php">
  <div class="">
    <label>Nome de usuario:</label>
    <input type="text" class="" placeholder="Digite aqui" name="nome_user">
  </div>
  <div class="">
    <label>Senha:</label>
    <input type="password" class="" placeholder="Digite aqui" name="senha">
  </div>
  <button type="submit" class="">Entrar</button>
  <p>Não é cadastrado? <a href="pags/cadastrar.php">Cadastre-se aqui</a></p>
</form> -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>