<?php
require_once "conexao.php";

function inserirEndereco ($id_usuario, $rua, $numero, $bairro, $cep) {
    $comando = "INSERT INTO usuario (id_usuario, rua, numero, bairro, cep)
    VALUES ('$id_usuario', '$rua', '$numero', '$bairro', '$cep')";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao inserir endereço";
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

function atualizarEndereco ($id_endereco, $id_usuario, $rua, $numero, $bairro, $cep) {
    $comando = "UPDATE endereco SET id_usuario = $id_usuario,
    rua = $rua,
    numero = $numero,
    bairro = $bairro,
    cep = $cep
    WHERE id_endereco = $id_endereco";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao alterar o endereço";
    }
}

?>