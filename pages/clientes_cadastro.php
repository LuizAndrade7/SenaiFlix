<!--Página de cadastrar clientes-->
<h1>CADASTRAR CLIENTES</h1><br><br>
<form method="post" action="pages/clientes_cadastro_salvar.php">
  <div class="row g-3">
    <div class="col">
      <label for="nome">Nome completo</label>
      <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" aria-label="First name">
    </div>
    <div class="col">
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" class="form-control" pattern="[0-9]{11}" placeholder="000.000.000-00" maxlength="11" aria-label="Last name">
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="endereco">Endereço</label>
      <input type="text" name=" endereco" class="form-control"  aria-label="First name">
    </div>
    <div class="col">
      <label for="bairro">Bairro</label>
      <input type="text" name="bairro" class="form-control"  aria-label="Last name">
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="cidade">Cidade</label>
      <input type="text" name="cidade" class="form-control"  aria-label="First name">
    </div>
    <div class="col">
      <label for="estado">Estado</label>
        <select class="form-select" name="estado" aria-label="Default select example">
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
      <input type="text" name="cep" class="form-control" maxlength="8" placeholder="00000-000" aria-label="First name">
    </div>
    <div class="col">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="senaiflix@senaiflix.com" aria-label="Last name">
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="cep">Telefone</label>
      <input type="text" name="telefone" class="form-control" maxlength="13" placeholder="(31)99999-9999" aria-label="First name">
    </div>
  </div><br>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar cliente</button>
    <a class="btn btn-primary" href="index.php?pagina=clientes_listar" role="button">Listar Usuários</a>
  </div>
</form>


    


