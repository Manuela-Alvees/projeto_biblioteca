<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$data = $_POST['data'];



echo "seu cadastro foi feito com sucesso.";

include "conexao.php";

$sql = "INSERT INTO `clientes` (`nome` , `telefone` , `endereço`, `email`, `data_nasc`)
        VALUE ('$nome' , '$telefone' , '$endereco', '$email', '$data')";

    if (mysqli_query($con, $sql))
     {
        echo "Usuário cadastrado com sucesso!";
        echo "<br> <a href='menu.html'>Voltar</a>";
    }

    else {
        echo "Erro no cadastro!";
    }