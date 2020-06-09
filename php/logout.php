<?php 

session_start();

unset(
	$_SESSION['login'],
	$_SESSION['senha']
);

header('location:../index.php');

 ?>