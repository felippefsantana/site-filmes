<?php 
session_start();
include('conexao.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE usuario = '$login' AND senha = md5('$senha')";

$result = mysqli_query($conection, $query);

if (mysqli_num_rows($result) > 0) {
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	header('location:../pags/home.php');
}
else{
	echo "	<script>
				document.alert('USUÁRIO OU SENHA INVALIDOS!!!');
			</script>";
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location: ../index.php');
}


// if(empty($_POST['usuario']) || empty($_POST['senha'])){
// 	header('Location: ../index.php');
// 	exit();
// }

// $usuario = mysqli_real_escape_string($conection, $_POST['usuario']);
// $senha = mysqli_real_escape_string($conection, $_POST['senha']);

// $query = "select id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

// $result = mysqli_query($conection, $query);

// $row = mysqli_num_rows($result);

// // echo $row;exit;
// if($row == 1){
// 	$_SESSION['nome_user'] = $usuario;
// 	header('Location: ../pags/home.php');
// 	exit();
// } else{
// 	header('Location: ../index.php');
// 	exit();
// }

 ?>