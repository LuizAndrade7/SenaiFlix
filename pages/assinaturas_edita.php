<?php 
    include('conexao.php');

    //Salvando o ID para busca
    $id_assinatura=$_GET['id'];

    //Selecionando as assinaturas para atualização
    $sql="SELECT * FROM assinaturas WHERE id_assinatura='$id_assinatura'";
    $resultado=$conn->query($sql);

    //Abortar execução caso não ache nenhuma linha no id do usuário
    if($resultado->num_rows<=0){
        echo "Usuário não encontrado";
        exit();
    }

    //Colocando nas linhas do banco de dados o resultado com array na função featch_assoc()
    $linha=$resultado->fetch_assoc();

    //Seleciontando os clientes da tabela cliente
    $resultado_cliente=$conn->query("SELECT * FROM clientes WHERE status=1");

?>
<!--Página de atualizar registros-->
<h1>ATUALIZAR REGISTROS</h1><br><br>
<form method="post" action="pages/assinaturas_edita_salvar.php?id=<?php echo $linha['id_assinatura']?>" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col">
                <label for="estado">Cliente</label>
                    <select class="form-select" name="id_cliente" id="id_cliente" aria-label="Default select example">
                        <?php while($cliente=$resultado_cliente->fetch_assoc()):?>
                        <option value="<?php echo $cliente['id_cliente'];?>" <?php echo $cliente['id_cliente']==$linha['id_cliente'] ?  "selected='selected'" : ''?>><?php echo $cliente ['nome'];?></option>
                        <?php endwhile; ?>
                    </select>  
            </div>
            <div class="col">
                <label for="Plano">Plano</label>
                <select class="form-select" name="plano" id="plano" aria-label="Default select example">
                    <option value=""><?php echo $linha['plano']?></option>
                    <option value="mensal">Mensal</option>
                    <option value="bimestral">Bimestral</option>
                    <option value="trimestral">Trimestal</option>
                    <option value="anual">Anual</option>
                </select>
            </div>
        </div>
    
        <div class="row g-3">
            <div class="col">
                <label for="data_inicio">Data inicial</label>
                <input type="date" name="data_inicio" value="<?php echo $linha['data_inicio']?>" class="form-control" placeholder="Digite o nome do filme" aria-label="First name">
            </div>
            <div class="col">
                <label for="data_fim">Data final</label>
                <input type="date" name="data_fim" value="<?php echo $linha['data_fim']?>" class="form-control" placeholder="Digite o nome do filme" aria-label="First name">
            </div>
        </div><br>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Registrar assinatura</button>
            <a class="btn btn-primary" href="index.php?pagina=assinatura_listar" role="button">Listar Assinaturas</a>
        </div>
</form>