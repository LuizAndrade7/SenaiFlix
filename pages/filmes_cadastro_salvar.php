<?php
    //Conexão com o server com condicional por requisição, método $_POST
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    include('../conexao.php');
    
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $lancamento=$_POST['lancamento'];
    $genero=$_POST['genero'];
    $classificacao=$_POST['classificacao'];
    $foto=$_FILES["foto"];
    $data_cadastro=date("Y-m-d H:i:s");
    $data_atualizacao=date("Y-m-d H:i:s");
    $status=1; 

    //Diretório de destino para salvar o arquivo
    $diretorio_destino="uploads/";

    //Gera um nome único para o arquivo
    $nome_arquivo = uniqid().'_'.basename($foto['name']);

    //Caminho completo do arquivo no servidor
    $caminho_arquivo=$diretorio_destino . $nome_arquivo;

    //Verifica a extensão do arquivo
    $extensoes_permitidas = array("jpg","jpeg","png","webp");
    $extensao=strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));

    IF(!in_array($extensao, $extensoes_permitidas)){
        echo"Somente arquivos JPG, JPEG, PNG e WEBP são permitidos.";
        exit;
    }

    //Move o arquivo para o diretório de destino
    if(move_uploaded_file($foto["tmp_name"], $caminho_arquivo)){
        echo"O arquivo foi enviado com sucesso";
    }else{
        echo"Erro ao enviar o arquivo.";
    }
    
    //Salvar no banco os dados
    $sql = "INSERT INTO filmes(titulo, descricao, ano_lancamento, genero, classificacao, foto, data_cadastro, data_atualizacao, status) 
    VALUES ('$titulo','$descricao','$lancamento','$genero','$classificacao','$nome_arquivo','$data_cadastro','$data_atualizacao','$status')"; 
    
    if($conn->query($sql)==TRUE){
        echo "Cadastro realizado";
        header('location:../index.php?pagina=filmes_listar');
    }else{ 
        echo "Erro ao inserir registro". $conn->error;
    }}
?>