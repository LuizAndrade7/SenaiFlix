<?php
    //Conexão e seleção da tabela no mysql
    include('conexao.php');

    $sql="SELECT * FROM  assinaturas";
    $resultado=$conn->query("SELECT ASS.id_assinatura, ASS.id_cliente, ASS.plano, ASS.data_inicio, ASS.data_fim, CL.nome AS nome_cliente FROM assinaturas ASS LEFT JOIN clientes CL ON ASS.id_cliente=CL.id_cliente");
?>

<!--Tabela de lista dos assinantes-->
<h1>LISTA DE ASSINATURAS</h1>
<table class="table table-dark table-striped">
<i class="bi bi-table"></i>
  <tr>
    <th>ID</th>
    <th>Cliente</th>
    <th>Plano</th>
    <th>Data início</th>
    <th>Data fim</th>
    <th>Editar</th>
    <th>Remover</th>
  </tr>

<!--PHP para buscar os resultados das linhas no banco de dados e exibir além de seleção Editar e Remover-->
<?php
    while($linha=$resultado->fetch_assoc()){
        echo "
        <tr>
            <td>".$linha['id_assinatura']."</td>
            <td>".$linha['nome_cliente']."</td>
            <td>".$linha['plano']."</td>
            <td>".$linha['data_inicio']."</td>
            <td>".$linha['data_fim']."</td>
            <td><a class='btn btn-warning' href='index.php?pagina=assinaturas_edita&id=".$linha['id_assinatura']."'>Editar</a></td>
            <td><a class='btn btn-danger' href='index.php?pagina=assinaturas_remover&id=".$linha['id_assinatura']."'>Remover</a></td>
        </tr>";
    }
?>
</table>    
<a class="btn btn-primary" href="index.php?pagina=assinaturas_cadastro" role="button">Cadastrar Filme</a> 