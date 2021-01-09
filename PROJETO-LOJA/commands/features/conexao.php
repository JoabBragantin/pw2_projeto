<?php
function con(){
    $conexao = mysqli_connect("localhost","root","","ustoria_loja");

    if (! $conexao) {
        echo "Erro ao conectar ao Bando de Dados";
    } else {
        return $conexao;
    }
}
?>