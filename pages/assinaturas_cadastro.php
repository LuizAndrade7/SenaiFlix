<!--PHP para conexão e busca dos clientes na tabela de cliente para exibição dos nomes na lista de assinaturas-->
<?php
    include('conexao.php');
    $resultado_cliente=$conn->query("SELECT * FROM clientes WHERE status=1");
?>

<!--Página de cadastrar filmes-->
<h1>CADASTRAR ASSINATURA</h1><br><br>
    <form method="post" action="pages/assinaturas_cadastro_salvar.php" enctype="multipart/form-data">
        <div class="row g-3">
            <div class="col">
                <label for="estado">Cliente</label>
                    <select class="form-select" name="id_cliente" id="id_cliente" aria-label="Default select example">
                        <?php while($cliente=$resultado_cliente->fetch_assoc()):?>
                        <option value="<?php echo $cliente['id_cliente'];?>"><?php echo $cliente['nome'];?></option>
                        <?php endwhile; ?>
                    </select>  
            </div>
            <div class="col">
                <label for="Plano">Plano</label>
                <select class="form-select" name="plano" id="plano" aria-label="Default select example">
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
                <input type="date" name="data_inicio" class="form-control" placeholder="Início de vigência" aria-label="First name">
            </div>
            <div class="col">
                <label for="data_fim">Data final</label>
                <input type="date" name="data_fim" class="form-control" placeholder="Fim de vigência" aria-label="First name">
            </div>
        </div><br>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Registrar assinatura</button>
            <a class="btn btn-primary" href="index.php?pagina=assinatura_listar" role="button">Listar Assinaturas</a>
        </div>
    </form>