<?php

require_once ('features/modelo_produto.php');
require_once ('features/modelo_categoria.php');
session_start();




$preco = $_POST['preco'];
$nomeProduto = $_POST['nomeProduto'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];
$minEstoque = $_POST['estoque_minimo'];
$maxEstoque = $_POST['estoque_maximo'];
$qntEstoque = $_POST['quant_estoque'];



$descricao = $_POST['descricao'];


$linha = detalharProduto($_SESSION['idProduto']);
echo $linha['idProduto'];

atualizarProduto ($linha['idProduto'], $preco, $nomeProduto, $descricao, $imagem, $minEstoque, $maxEstoque, $qntEstoque);
atualizarCategoria($linha['descricao']);

echo "<a href='..\index.html'>Voltar para a Página Inicial</a>";
?>