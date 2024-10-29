<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$telefone = $_POST['telefone'];
$cargo = $_POST['cargo'];

echo "seu cadastro foi feito com sucesso.";

include "conexao.php";

$sql = "INSERT INTO `usuarios` (`email` , `senha` , `nome`, `data_nasc`, `telefone`, `cargo`)
        VALUE ('$email' , '$senha' , '$nome', '$data', '$telefone', '$cargo')";

    if (mysqli_query($con, $sql))
     {
        echo "Usuário cadastrado com sucesso!";
        echo "<br> <a href='menu.html'>Voltar</a>";
    }

    else {
        echo "Erro no cadastro!";
    }