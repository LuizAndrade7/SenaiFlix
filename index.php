<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!--PHP para incluir o header para todas as páginas-->
    <?php
        include('header.php');
    ?>   
    <!--DIV de conteúdo de todas as páginas-->
    <div class="container">
        <br><br><br><br><br>
        <!-- Função para buscar pages por method GET--> 
        <?php
            $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';
            $pagePath = "pages/{$pagina}.php";
        
            if (file_exists($pagePath)) {
                include $pagePath;
            } else {
                echo "<div class='alert alert-danger'>Página não encontrada.</div>";
            }
        ?>
    </div>
    
    <?php
        include('footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>