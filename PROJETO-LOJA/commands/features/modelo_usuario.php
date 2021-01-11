<?php
require_once "conexao.php";

function inserirUsuario ($cpf, $nome, $email, $sexo, $senha, $dataNascimento, $telefone, $adm) {
    $comando = "INSERT INTO usuario (cpf, nome, email, sexo, senha, dataNascimento, telefone, adm)
    VALUES ('$cpf', '$nome', '$email', '$sexo', '$senha', '$dataNascimento', '$telefone', '$adm')";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao inserir usuário";
    } else {
        return $comando;
    }
}

function detalharUsuario ($id_usuario) {
    $comando = "SELECT * FROM usuario WHERE cpf = $id_usuario";
    $result = mysqli_query(con(), $comando);
    $linha = mysqli_fetch_assoc($result);

    return $linha;
}

function detalharUsuarioJoinEndereco($id_aluno) {
    $comando = "SELECT u.nome, u.email, u.cpf, u.sexo, u.dataNascimento, u.telefone, e.pais, e.estado, e.cidade, e.rua
    , e.numero, e.cep FROM usuario AS u JOIN endereco AS e ON u.cpf = e.cpf WHERE u.cpf = $id_aluno";
    $result = mysqli_query(con(), $comando);
    $linha = mysqli_fetch_assoc($result);

    return $linha;
}

function detalharLoginUsuario ($email, $senha) {
    $comando = "SELECT * FROM usuario WHERE email = '$email' AND senha= '$senha';";
    $result = mysqli_query(con(), $comando);
    $linha = mysqli_fetch_assoc($result);

    return $linha;
}

function deletarUsuario ($id_usuario) {
    $comando = "DELETE FROM usuario WHERE cpf = $id_usuario";
    $result = mysqli_query(con(), $comando);

    if (! $result) {
        return "Erro ao excluir o usuário!";
    } else {
        return $result;
    }
}

function atualizarUsuario ($cpf, $nome, $email, $sexo, $senha, $dataNacimento, $telefone) {
    $comando = "UPDATE usuario SET nome = $nome,
    email = $email,
    sexo = $sexo,
    senha = $senha,
    dataNascimento = $dataNascimento,
    telefone = $telefone
    WHERE id_usuario = $cpf";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao alterar o usuário";
    }
}


?>