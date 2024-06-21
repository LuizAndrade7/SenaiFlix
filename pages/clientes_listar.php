<?php
    //Conexão e seleção da tabela no mysql
    include('conexao.php');

    $sql="SELECT * FROM  clientes";
    $resultado=$conn->query($sql);
?>

<!--Tabela de lista dos clientes-->
<h1>LISTA DE CLIENTES</h1>
<table class="table table-dark table-striped">
<i class="bi bi-table"></i>
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Endereço</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>CEP</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Editar</th>
    <th>Remover</th>
  </tr>

<!--PHP para buscar os resultados das linhas no banco de dados e exibir além de seleção Editar e Remover-->
<?php
    while($linha=$resultado->fetch_assoc()){
        echo "
        <tr>
            <td>".$linha['id_cliente']."</td>
            <td>".$linha['nome']."</td>
            <td>".$linha['cpf']."</td>
            <td>".$linha['endereco']."</td>
            <td>".$linha['bairro']."</td>
            <td>".$linha['cidade']."</td>
            <td>".$linha['estado']."</td>
            <td>".$linha['cep']."</td>
            <td>".$linha['email']."</td>
            <td>".$linha['telefone']."</td>
            <td><a class='btn btn-warning' href='index.php?pagina=clientes_edita&id=".$linha['id_cliente']."'>Editar</a></td>
            <td><a class='btn btn-danger' href='index.php?pagina=clientes_remover&id=".$linha['id_cliente']."'>Remover</a></td>
        </tr>";
    }
?>
</table>
<a class="btn btn-primary" href="index.php?pagina=clientes_cadastro" role="button">Cadastrar Usuários</a> 