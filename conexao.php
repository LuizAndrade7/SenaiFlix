<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="senaiflix_luiz";

//Criando conexão com o banco
$conn= new mysqli($servidor, $usuario, $senha, $banco);

//Verificando conexão
if($conn->connect_error){
    die("Erro conexão");
}
?>