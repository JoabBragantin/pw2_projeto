<?php

require_once ('features/modelo_usuario.php');
require_once ('features/modelo_endereco.php');
session_start();

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

$linha = detalharUsuarioJoinEndereco($_SESSION['cpf_usuario']);
echo $linha['id_endereco'];

atualizarEndereco ($linha['id_endereco'], $cpf, $pais, $estado, $cidade, $rua, $numero, $cep);
atualizarUsuario ($linha['cpf'], $cpf, $nome, $email, $sexo, $senha, $dataNascimento, $telefone, $adm);

echo "<a href='..\index.html'>Voltar para a Página Inicial</a>";