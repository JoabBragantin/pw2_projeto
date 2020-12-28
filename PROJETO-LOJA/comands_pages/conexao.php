<?php
function con(){
    $conexao = mysqli_connect("localhost","root","","projeto_loja");

    if (! $conexao) {
        echo "Erro ao conectar ao Bando de Dados";
    }
}
?>