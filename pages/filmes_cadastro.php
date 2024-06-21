<!--Página de cadastrar filmes-->
<h1>CADASTRAR FILME</h1><br><br>
<form method="post" action="pages/filmes_cadastro_salvar.php" enctype="multipart/form-data">
  <div class="row g-3">
    <div class="col">
      <label for="nome">Título</label>
      <input type="text" name="titulo" class="form-control" placeholder="Digite o nome do filme" aria-label="First name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="endereco">Lançamento</label>
      <input type="text" name="lancamento" class="form-control"  aria-label="First name">
    </div>
    <div class="col">
      <label for="estado">Gênero</label>
        <select class="form-select" name="genero" aria-label="Default select example">
            <option value="acao">Ação</option>
            <option value="aventura">Aventura</option>
            <option value="animacao">Animação</option>
            <option value="comedia">Comédia</option>
            <option value="drama">Drama</option>
            <option value="documentario">Documentário</option>
            <option value="fantasia">Fantasia</option>
            <option value="ficcao_cientifica">Ficção Científica</option>
            <option value="guerra">Guerra</option>
            <option value="musical">Musical</option>
            <option value="policial">Policial</option>
            <option value="romance">Romance</option>
            <option value="suspense">Suspense</option>
            <option value="terror">Terror</option>
            <option value="western">Western</option>
        </select>  
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="classificacao">Classificação</label>
      <input type="number" name="classificacao" class="form-control" aria-label="First name">
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="foto">Upload foto</label>
        <input type="file" class="form-control" name="foto" id="foto">
    </div>
  </div><br>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar filme</button>
    <a class="btn btn-primary" href="index.php?pagina=filmes_listar" role="button">Listar Filmes</a>
  </div>
</form>


    


