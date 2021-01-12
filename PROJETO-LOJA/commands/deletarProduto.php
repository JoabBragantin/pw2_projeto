<?php
    require_once ('features/modelo_produto.php');

    $idProduto = $_GET['idProduto'];

    $rodou = deletarProduto($idProduto);

    if (! $rodou) {
        echo "Erro ao deletar produto";
    } else {
        echo "<a href='index.html'>Voltar para a Página Inicial</a>";
    }
?>