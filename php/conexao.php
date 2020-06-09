<?php 

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'pw2';

$conection = mysqli_connect($servidor, $usuario, $senha, $bd);

if(!$conection){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    } 

 ?>