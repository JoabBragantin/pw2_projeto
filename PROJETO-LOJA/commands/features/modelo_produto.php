<?php
	require_once "conexao.php";
		
	function inserirProduto ($preco, $nomeProduto, $descricao, $imagem, $minEstoque, $maxEstoque, $qntEstoque){
		$comando =  "INSERT INTO produto (preco, nomeProduto, descricao, imagem, estoque_minimo, estoque_maximo, quant_estoque)
		VALUES ('$preco', '$nomeProduto', '$descricao', '$imagem', '$minEstoque', '$maxEstoque', '$qntEstoque')";
			
		$rodou = mysqli_query(con(), $comando);

			if (! $rodou) {
				return "Erro ao inserir produto";
		}
	}

	function detalharProduto ($idProduto) {
		$comando = "SELECT * FROM produto";
		$result = mysqli_query(con(), $comando);
		$linha = mysqli_fetch_assoc($result);

		return $linha;
	}

	function deletarProduto ($idProduto) {
		$comando = "DELETE FROM produto WHERE idProduto = $idProduto";
		$rodou = mysqli_query(con(), $comando);

			if (! $rodou) {
				return "Erro ao excluir produto!";
		}
	}

	function atualizarProduto ($idProduto,$preco, $nomeProduto, $descricao, $imagem, $minEstoque, $maxEstoque, $qntEstoque){
		$comando = "UPDATE produto SET preco = $preco, nomeProduto = $nomeProduto, descricao = $descricao, imagem = $imagem, estoque_minimo = $minEstoque,
estoque_maximo = $maxEstoque, quant_estoque = $qntEstoque, WHERE idProduto = $Produto";

		$rodou = mysqli_query(con(), $comando);

			if (! $rodou) {
				return "Erro ao alterar produto";
		}
	}
	function listarProdutos ($idProduto,$preco, $nomeProduto, $descricao, $imagem, $minEstoque, $maxEstoque, $qntEstoque){
		$comando = "SELECT * FROM produto";
		$rodou = mysqli_query(con(), $comando);
	}


?>