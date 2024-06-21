<?php
include('../conexao.php');

//Função para testar a existência do ID pela função GET
if(!isset($_GET['id'])){
    echo "Usuário não informado";
    exit();
}

//Salvando o ID para busca
$id_filme = $_GET['id'];

//Salvando os novos dados
if($_SERVER['REQUEST_METHOD']=='POST'){
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $lancamento=$_POST['lancamento'];
    $genero=$_POST['genero'];
    $classificacao=$_POST['classificacao'];
    $foto=$_FILES["foto"];
    $data_atualizacao=date("Y-m-d H:i:s");
    $status=1; 

    //Salvando nova foto
        //Diretório de destino para salvar o arquivo
        $diretorio_destino="uploads/";


        //Selecionando os filmes para atualização
        $sql="SELECT * FROM filmes WHERE id_filme='$id_filme'";
        $resultado=$conn->query($sql);
        //Abortar execução caso não ache nenhuma linha no id de filmes
        if($resultado->num_rows<=0){
            echo "Filme não encontrado";
            exit();
        }
        //Colocando nas linhas do banco de dados o resultado com array na função featch_assoc()
        $linha=$resultado->fetch_assoc();

        unlink('uploads/'.$linha['foto']);
   
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
    //    

    //Update na base de dados dos clientes
    $sql="UPDATE filmes SET titulo='$titulo',descricao='$descricao',ano_lancamento='$lancamento',
    genero='$genero',classificacao='$classificacao',foto='$nome_arquivo', data_atualizacao='$data_atualizacao' WHERE id_filme='$id_filme'";

    //Query para teste do registro
    if($conn ->query($sql)==TRUE){
        echo "Registro atualizado";
        header('location:../index.php?pagina=filmes_listar');
    }else{
        echo"Erro ao editar;";
    }
}

?>