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
    pais = '$pais',
    estado = '$estado',
    cidade = '$cidade',
    rua = '$rua',
    numero = $numero,
    cep = $cep
    WHERE id_endereco = $id_endereco";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao alterar o endereço";
    }
}

//function atualizarEndereco ($cpf, $nome, $email, $sexo, $senha, $dataNascimento, $telefone, $adm, $id_endereco, $cpf, $pais, $estado, $cidade, $rua, $numero, $cep) {
//   $comando = "UPDATE usuario AS u JOIN endereco AS e ON u.cpf = e.cpf SET u.nome ='João', u.adm=1, u.email='joao@email.com',
// u.cpf=222222, e.cpf=222222, u.sex='M',u.dataNascimento=3333-10-31, u.telefone=11111111, e.pais='BR', e.estado='RJ', e.cidade='Salvador', e.rua='Maria das Graces', e.numero=88, e.cep=232556 WHERE u.cpf = 666666";
?>