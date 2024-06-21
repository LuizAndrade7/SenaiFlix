<?php
include('../conexao.php');

//Função para testar a existência do ID pela função GET
if(!isset($_GET['id'])){
    echo "Usuário não informado";
    exit();
}

//Salvando o ID para busca
$id_assinatura = $_GET['id'];

//Salvando os novos dados
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_cliente=$_POST['id_cliente'];
    $plano=$_POST['plano'];
    $data_inicio=$_POST['data_inicio'];
    $data_fim=$_POST['data_fim'];
    $data_atualizacao=date("Y-m-d H:i:s");
    $status=1; 

    //Update na base de dados dos clientes
    $sql="UPDATE assinaturas SET id_cliente='$id_cliente',plano='$plano',data_inicio='$data_inicio',
    data_fim='$data_fim',data_atualizacao='$data_atualizacao' WHERE id_assinatura='$id_assinatura'";

    //Query para teste do registro
    if($conn ->query($sql)==TRUE){
        echo "Registro atualizado";
        header('location: ../index.php?pagina=assinaturas_listar');
    }else{
        echo"Erro ao editar;";
    }
}

?>