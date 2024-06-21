<?php
include('../conexao.php');

//Função para testar a existência do ID pela função GET
if(!isset($_GET['id'])){
    echo "Usuário não informado";
    exit();
}

//Salvando o ID para busca
$id_cliente = $_GET['id'];

//Salvando os novos dados
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $cep=$_POST['cep'];
    $email=$_POST['email'];
    $data_cadastro=date("Y-m-d H:i:s");
    $data_atualizacao=date("Y-m-d H:i:s");
    $status=1;

    //Update na base de dados dos clientes
    $sql="UPDATE clientes SET nome='$nome',cpf='$cpf',endereco='$endereco',
    bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep',email='$email',
    data_atualizacao='$data_atualizacao' WHERE id_cliente='$id_cliente'";

    //Query para teste do registro
    if($conn ->query($sql)==TRUE){
        echo "Registro atualizado";
        header('location: http://localhost/senaiflix/index.php?pagina=clientes_listar');
    }else{
        echo"Erro ao editar;";
    }
}

?>