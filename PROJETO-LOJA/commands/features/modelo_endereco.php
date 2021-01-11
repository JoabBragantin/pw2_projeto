<?php
require_once "conexao.php";

function inserirEndereco ($cpf, $pais, $estado, $cidade, $rua, $numero, $cep) {
    $comando = "INSERT INTO endereco (cpf, pais, estado, cidade, rua, numero, cep)
    VALUES ('$cpf', '$pais', '$estado', '$cidade', '$rua', '$numero', '$cep')";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao inserir endereço";
    } else {
        return $rodou;
    }
}

function detalharEndereco ($id_endereco) {
    $comando = "SELECT * FROM endereco WHERE id_endereco = $id_endereco";
    $result = mysqli_query(con(), $comando);
    $linha = mysqli_fetch_assoc($result);

    return $linha;
}

function deletarEndereco ($id_endereco) {
    $comando = "DELETE FROM endereco WHERE id_endereco = $id_endereco";
    $result = mysqli_query(con(), $comando);

    if (! $result) {
        return "Erro ao excluir o endereço!";
    }
}

function atualizarEndereco ($id_endereco, $cpf, $pais, $estado, $cidade, $rua, $numero, $cep) {
    $comando = "UPDATE endereco SET cpf = $cpf,
    pais = $pais,
    estado = $estado,
    cidade = $cidade,
    rua = $rua,
    numero = $numero,
    cep = $cep
    WHERE id_endereco = $id_endereco";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao alterar o endereço";
    }
}

?>