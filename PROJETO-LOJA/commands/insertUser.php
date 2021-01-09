<?php
    require_once ('features/modelo_usuario.php');
    require_once ('features/modelo_endereco.php');

    //Dados para a tabela de usuário

    $cpf = $_POST['cpf'];
    $nome = $_POST['full_name'];
    $email = $_POST['email'];
    $sexo = $_POST['gender'];
    $senha = $_POST['account_password'];
    $dataNascimento = $_POST['birthday'];
    $telefone = $_POST['phone'];
    $adm = $_POST['admin_account'];

    //Dados para a tabela de endereço

    $pais = $_POST['country'];
    $estado = $_POST['state'];
    $cidade = $_POST['city'];
    $rua = $_POST['address'];
    $numero = $_POST['number'];
    $cep = $_POST['postcode'];

    inserirUsuario ($cpf, $nome, $email, $sexo, $senha, $dataNascimento, $telefone, $adm);
    inserirEndereco ($cpf, $pais, $estado, $cidade, $rua, $numero, $cep);

    echo "<a href='..\index.html'>Página Inicial</a>";
?>