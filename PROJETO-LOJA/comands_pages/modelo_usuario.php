<?php
require_once "conexao.php";

function inserirUsuario ($nome, $email, $sexo, $senha, $dataNacimento, $telefone) {
    $comando = "INSERT INTO usuario (nome, email, senha, dataNascimento, telefone)
    VALUES ('$nome', '$email', '$sexo', '$senha', '$dataNacimento', '$telefone')";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao inserir usuário";
    }
}

function detalharUsuario ($id_usuario) {
    $comando = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
    $result = mysqli_query(con(), $comando);
    $linha = mysqli_fetch_assoc($result);

    return $linha;
}

function deletarUsuario ($id_usuario) {
    $comando = "DELETE FROM usuario WHERE id_aluno = $id_aluno";
    $result = mysqli_query(con(), $comando);

    if (! $result) {
        return "Erro ao excluir o usuário!";
    }
}

function atualizarUsuario ($id_usuario, $nome, $email, $sexo, $senha, $dataNacimento, $telefone) {
    $comando = "UPDATE usuario SET nome = $nome,
    email = $email,
    sexo = $sexo,
    senha = $senha,
    dataNascimento = $dataNascimento,
    telefone = $telefone
    WHERE id_usuario = $id_usuario";

    $rodou = mysqli_query(con(), $comando);

    if (! $rodou) {
        return "Erro ao alterar o usuário";
    }
}


?>