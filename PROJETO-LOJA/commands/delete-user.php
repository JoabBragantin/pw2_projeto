<?php
    require_once ('features/modelo_usuario.php');

    $cpf = $_GET['cpf'];

    $rodou = deletarUsuario($cpf);

    if (! $rodou) {
        echo "Falha ao deletar o usuário";
    } else {
        echo "<a href='..\index.html'>Voltar para a Página Inicial</a>";
    }
?>