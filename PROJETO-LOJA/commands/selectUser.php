<?php
    require_once ('features/modelo_usuario.php');
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['password'];

    $linha = detalharLoginUsuario ($email, $senha);

    if ($linha != Null) {
        $_SESSION['cpf_usuario'] = $linha['cpf'];

        echo "Olá, " . $linha['nome'] . "!<br>";
        echo "<a href='..\index.html'>Página Inicial</a>";
    } else {
        echo "Usuário não encontrado<br>";
        echo "<a href='..\login.html'>Tentar Novamente</a>";
    }

?>