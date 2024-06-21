<?php
    //Conexão e seleção da tabela no mysql
    include('conexao.php');

    $sql="SELECT * FROM  filmes";
    $resultado=$conn->query($sql);
?>

<!--Tabela de lista dos filmes-->
<h1>LISTA DE FILMES</h1>
<table class="table table-dark table-striped">
<i class="bi bi-table"></i>
  <tr>
    <th>ID</th>
    <th>Título</th>
    <th>Descrição</th>
    <th>Lançamento</th>
    <th>Gênero</th>
    <th>Classificação</th>
    <th>Foto</th>
    <th>Editar</th>
    <th>Remover</th>
  </tr>

<!--PHP para buscar os resultados das linhas no banco de dados e exibir além de seleção Editar e Remover-->
<?php
    while($linha=$resultado->fetch_assoc()){
        echo "
        <tr>
            <td>".$linha['id_filme']."</td>
            <td>".$linha['titulo']."</td>
            <td>".$linha['descricao']."</td>
            <td>".$linha['ano_lancamento']."</td>
            <td>".$linha['genero']."</td>
            <td>".$linha['classificacao']."</td>
            <td><img width='100px' heigth='100px' src=".'pages/uploads/'.@$linha['foto']."></td>
            <td><a class='btn btn-warning' href='index.php?pagina=filmes_edita&id=".$linha['id_filme']."'>Editar</a></td>
            <td><a class='btn btn-danger' href='index.php?pagina=filmes_remover&id=".$linha['id_filme']."'>Remover</a></td>
        </tr>";
    }
?>
</table>    
<a class="btn btn-primary" href="index.php?pagina=filmes_cadastro" role="button">Cadastrar Filme</a> 