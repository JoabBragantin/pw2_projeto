<?php
    require_once ('features/modelo_produto.php');
    session_start();

    $idProduto = $_POST['idProduto'];
    $idCategoria = $_POST['idCategoria'];

    $linha = detalharProduto ($idProduto, $idCategoria);

    if ($linha != Null) {
        $_SESSION['idProduto'] = $linha['idProduto'];

        echo $linha['idProduto'] . '<br>';
        echo "<a href='..\index.html'>Página Inicial</a>";
    } else {
        echo "erro ao detalhar produto";
    }

?>