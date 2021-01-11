<?php
    require_once ('features/modelo_usuario.php');
    require_once ('features/modelo_endereco.php');


    $cpf = $_GET['cpf'];
    $linha = $result = detalharUsuarioJoinEndereco($cpf);

    deletarEndereco ($linha['id_endereco']);
    deletarUsuario ($cpf);

    echo "<a href='..\index.html'>Voltar para a Página Inicial</a>";
    
?>