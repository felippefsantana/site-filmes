<?php 

session_start();
include('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];

$sql = "UPDATE usuario SET nome = '$nome', usuario = '$usuario', email = '$email' WHERE id = '$id'";

$atualizar = mysqli_query($conection, $sql);

$_SESSION['login'] = $usuario;

if($atualizar){
          echo"<script language='javascript' type='text/javascript'>
          alert('Dados atualizados com sucesso!');window.location.
          href='../pags/perfil.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível atualizar os dados!');window.location.
          href='../pags/editar.php'</script>";
        }
 ?>