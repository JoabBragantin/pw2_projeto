<?php
	require_once "conexao.php";

		function inserirCategoria ($nomeCat, $descricao) {
		$comando = "INSERT INTO categoria (nomeCategoria, descricao) VALUES ('$nomeCat, $descricao')";

		$rodou = mysqli_query(con(), $comando);

			if (! $rodou) {
				return "Erro ao inserir Categoria";
		}
	}	

		function detalharCategoria ($idCategoria) {
		$comando = "SELECT * FROM categoria";
		$result = mysqli_query(con(), $comando);
		$linha = mysqli_fetch_assoc($result);

		return $linha;
	}

		function deletarCategoria ($idCategoria) {
		$comando = "DELETE FROM categoria WHERE idCategoria = $idCategoria";
		$rodou = mysqli_query(con(), $comando);

			if (! $rodou) {
				return "Erro ao excluir Categoria!";
		}
	}

		function atualizarCategoria ($descricao) {
		$comando = "UPDATE categoria SET descricao = $descricao,";

		$rodou = mysqli_query(con(), $comando);

			if (! $rodou) {
				return "Erro ao alterar Categoria";
		}
	}


?>