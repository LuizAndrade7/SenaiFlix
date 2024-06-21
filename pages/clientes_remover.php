<?php
    //Conexão com o banco
    include('conexao.php');

    //Método get para buscar o id do cliente que será removido
    $id_cliente=$_GET['id'];

    //Comando no SQL para DELETE do cliente
    $sql = "DELETE FROM clientes WHERE id_cliente='$id_cliente'";

    //Comando para conectar a query no banco e realizar as ações
    $resultado = $conn->query($sql);

    //Função header para voltar para lista de clientes
    header('location: index.php?pagina=clientes_listar');

?>







