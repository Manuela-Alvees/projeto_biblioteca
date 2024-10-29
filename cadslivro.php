<?php
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$estoque = $_POST['estoque'];
$datafabri = $_POST['datafabri'];
$editora = $_POST['editora'];
$disp = $_POST['disp'];


echo "seu cadastro foi feito com sucesso.";

include "conexao.php";

$sql = "INSERT INTO `livros` (`categoria` , `estoque` , `titulo`, `editora`, `autor`, `ano_fabri`,`disponibilidade`)
                        VALUE ('$categoria' , '$estoque' , '$titulo', '$editora', '$autor', '$datafabri','$disp')";

    if (mysqli_query($con, $sql))
     {
        echo "Usuário cadastrado com sucesso!";
        echo "<br> <a href='menu.html'>Voltar</a>";
    }

    else {
        echo "Erro no cadastro!";
    }