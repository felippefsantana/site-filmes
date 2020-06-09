<?php 
session_start();
include('conexao.php');

$nome = $_POST['nome'];
$nome_user = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$rsenha = md5($_POST['rsenha']);

// $dados = "INSERT INTO usuario VALUES (0, '$nome', '$nome_user', '$email', '$senha')";
// $insert = mysqli_query($conection, $dados);

$sql = "SELECT usuario FROM usuario WHERE usuario = '$nome_user'";
$result = mysqli_query($conection, $sql);
$verifica = mysqli_num_rows($result);

if ($verifica >= 1) {
	//echo 'Nome de usuário já existente!';
	echo"<script language='javascript' type='text/javascript'>
	    alert('Nome de usuário já existente!');window.location.
	    href='../pags/cadastrar.php'</script>";
} else {

	$dados = "INSERT INTO usuario VALUES (0, '$nome', '$nome_user', '$email', '$senha')";
	$insert = mysqli_query($conection, $dados);

	if($insert){
	    echo"<script language='javascript' type='text/javascript'>
	    alert('Usuário cadastrado com sucesso!');window.location.
	    href='../index.php'</script>";
	}else{
	    echo"<script language='javascript' type='text/javascript'>
	    alert('Não foi possível cadastrar esse usuário');</script>";
	}
}
//header('Location: ../index.php');

  ?>