<?php
    //Conexão com o banco
    include('conexao.php');

    //Método get para buscar o id do cliente que será removido
    $id_filme=$_GET['id'];

    //Select no banco
    $sql="SELECT * FROM filmes WHERE id_filme='$id_filme'";

    //Colocando os resultados das linhas em um array
    $resultado=$conn->query($sql);
    $linha = $resultado->fetch_assoc();
    
    //Função para apagar na pasta a foto
    unlink('pages/uploads/'.$linha['foto']);

    //Comando no SQL para DELETE do cliente
    $sql = "DELETE FROM filmes WHERE id_filme='$id_filme'";

    //Comando para conectar a query no banco e realizar as ações
    $resultado = $conn->query($sql);

    //Função header para voltar para lista de clientes
    header('location: index.php?pagina=filmes_listar');
?>