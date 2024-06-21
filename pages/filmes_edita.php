<?php 
    include('conexao.php');

    //Salvando o ID para busca
    $id_filme=$_GET['id'];

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

?>

<!--Página de atualizar filmes-->
<h1>CADASTRAR FILME</h1><br><br>
<form method="post" action="pages/filmes_edita_salvar.php?id=<?php echo $linha['id_filme']?>" enctype="multipart/form-data">
  <div class="row g-3">
    <div class="col">
      <label for="nome">Título</label>
      <input type="text" name="titulo" class="form-control" value="<?php echo $linha['titulo']?>" aria-label="First name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1"  rows="3"> <?php echo $linha['descricao']?> </textarea>
    </div>
  </div>

  <div class="row g-3">
    <div class="col">
      <label for="endereco">Lançamento</label>
      <input type="text" name="lancamento" class="form-control" value="<?php echo $linha['ano_lancamento']?>" aria-label="First name">
    </div>
    <div class="col">
      <label for="estado">Gênero</label>
        <select class="form-select" name="genero" aria-label="Default select example">
            <option value=""><?php echo $linha['genero']?></option>
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
      <input type="number" name="classificacao" value="<?php echo $linha['classificacao']?>" class="form-control" aria-label="First name">
    </div>
    <div class="input-group mb-3">
        <label class="input-group-text" for="foto">Upload foto</label>
        <input type="file" class="form-control" value="<?php echo $linha['foto']?>" name="foto" id="foto">
    </div>
  </div><br>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar filme</button>
    <a class="btn btn-primary" href="index.php?pagina=filmes_listar" role="button">Listar Filmes</a>
  </div>
</form>
