<?php 
    include('conexao.php');

    //Salvando o ID para busca
    $id_cliente=$_GET['id'];

    //Selecionando os clientes para atualização
    $sql="SELECT * FROM clientes WHERE id_cliente='$id_cliente'";
    $resultado=$conn->query($sql);

    //Abortar execução caso não ache nenhuma linha no id do usuário
    if($resultado->num_rows<=0){
        echo "Usuário não encontrado";
        exit();
    }

    //Colocando nas linhas do banco de dados o resultado com array na função featch_assoc()
    $linha=$resultado->fetch_assoc();

?>
<!--Página de atualizar registros-->
<h1>ATUALIZAR REGISTROS</h1><br><br>
<form method="post" action="pages/clientes_edita_salvar.php?id=<?php echo $linha['id_cliente']?>">
  <div class="row g-3">
    <div class="col">
      <label for="nome">Nome completo</label>
      <input type="text" name="nome" class="form-control" value="<?php echo $linha['nome']?>" aria-label="First name">
    </div>
    <div class="col">
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" class="form-control" pattern="[0-9]{11}" value="<?php echo $linha['cpf']?>" maxlength="11" aria-label="Last name">
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="endereco">Endereço</label>
      <input type="text" name=" endereco" class="form-control" value="<?php echo $linha['endereco']?>"  aria-label="First name">
    </div>
    <div class="col">
      <label for="bairro">Bairro</label>
      <input type="text" name="bairro" class="form-control" value="<?php echo $linha['bairro']?>" aria-label="Last name">
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" class="form-control" value="<?php echo $linha['cidade']?>" aria-label="First name">
    </div>
    <div class="col">
      <label for="estado">Estado</label>
        <select class="form-select" name="estado" value="<?php echo $linha['estado']?>" aria-label="Default select example">
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <option value="EX">Estrangeiro</option>
        </select>  
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="cep">CEP</label>
      <input type="text" name="cep" class="form-control" value="<?php echo $linha['cep']?>" maxlength="8" placeholder="00000-000" aria-label="First name">
    </div>
    <div class="col">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $linha['email']?>" placeholder="senaiflix@senaiflix.com" aria-label="Last name">
    </div>
  </div>
  
  <div class="row g-3">
    <div class="col">
      <label for="cep">Telefone</label>
      <input type="text" name="telefone" class="form-control" maxlength="13" placeholder="(31)99999-9999" aria-label="First name">
    </div>
  </div><br>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" action >Atualizar registro</button>
    <a class="btn btn-primary" href="../index.php?pagina=clientes_listar" role="button">Listar Usuários</a>
  </div>
</form>


    


