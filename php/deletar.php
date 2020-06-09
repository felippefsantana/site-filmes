<?php 

session_start();
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = '$id'";
$deletar = mysqli_query($conection, $sql);

if($deletar){
		unset(
			$_SESSION['login'],
			$_SESSION['senha']
		);
          echo"<script language='javascript' type='text/javascript'>
          alert('Conta excluida com sucesso!');window.location.
          href='../index.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível excluir a conta!');window.location.
          href='../pags/perfil.php'</script>";
        }

 ?>