<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica o usuário e a senha diretamente na consulta SQL
 

	$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
	$resultado = $conexao->query($sql);
    // Se encontrar o usuário com a senha correspondente
    if ($resultado->num_rows > 0) {
		$linha = $resultado->fetch_assoc();
		
        $_SESSION['email'] = $linha['email'];
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['permissao'] = $linha['permissao']; // Salva a permissão na sessão

        header('Location: index.php');
        exit();
    } else {
        echo "Usuário ou senha inválidos.";
    }

} else {
    header('Location:index.php?pagina=login');
    exit();
}

$conexao->close();
?>