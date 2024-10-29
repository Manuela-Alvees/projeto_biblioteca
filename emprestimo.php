<?php
$usu = $_POST['usu'];
$cli = $_POST['cli'];
$liv = $_POST['liv'];
$emp = $_POST['emp'];
$dev = $_POST['dev'];


include "conexao.php";

$sql = "INSERT INTO `emprestimo` (`id_cliente` , `id_usuario` , `id_livros`, `data_emprestimo`, `data_devol`)
        VALUE ('$cli' , '$usu' , '$liv', '$emp', '$dev')";

    if (mysqli_query($con, $sql))
     {
        echo "Usuário cadastrado com sucesso!";
        echo "<br> <a href='menu.html'>Voltar</a>";
    }

    else {
        echo "Erro no cadastro!";
    }