<?php
    //Conexão com o server com condicional por requisição, método $_POST
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include('../conexao.php');
    
    $id_cliente=$_POST['id_cliente'];
    $plano=$_POST['plano'];
    $data_inicio=$_POST['data_inicio'];
    $data_fim=$_POST['data_fim'];
    $data_cadastro=date("Y-m-d H:i:s");
    $data_atualizacao=date("Y-m-d H:i:s");
    $status=1; 
    
    //Salvar no banco os dados
    $sql = "INSERT INTO assinaturas(id_cliente, plano, data_inicio, data_fim, data_cadastro, data_atualizacao, status) 
    VALUES ('$id_cliente','$plano','$data_inicio','$data_fim','$data_cadastro','$data_atualizacao','$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "Cadastro realizado";
        header('location:../index.php?pagina=assinaturas_listar');
    }else{
        echo "Erro ao inserir registro". $conn->error;
    }}
?>