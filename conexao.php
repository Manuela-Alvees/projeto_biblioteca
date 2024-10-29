<?php

$server = "localhost";
$user = "root";
$pass = '';
$bd = "projeto_biblioteca";

if ($con = mysqli_connect($server, $user, $pass, $bd))
{
    //echo "conectado";
}

else {
    echo "Erro!";
}