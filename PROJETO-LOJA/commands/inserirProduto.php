
	<?php
		require_once ('features/modelo_produto.php');
		require_once ('features/modelo_categoria.php');
	
		$preco = $_POST['preco'];
		$categoria = $_POST['nomeCategoria'];
		$nomeProduto = $_POST['nomeProduto'];
		$descricao = $_POST['descricao'];
		$imagem = $_FILE['imagem'];
		$minEstoque = $_POST['estoque_minimo'];
		$maxEstoque = $_POST['estoque_maximo'];
		$qntEstoque = $_POST['quant_estoque'];
	
		$descricao = $_POST['descricao'];
	
		inserirProduto ($preco, $nomeCat, $nomeProduto, $descricao, $imagem, $minEstoque, $maxEstoque, $qntEstoque);
		inserirCategoria ($nomeCat, $idCategoria);

		echo "<a href='index.html'>Página Inicial</a>";
	?>
