<?php

session_start();

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if($cpf == "11111111111" && $senha==123)
{
    $_SESSION['usuario'] = ["nome": $cpf, "senha": $senha];
    header("location:../restrito.php");
}
else if($cpf == "22222222222" && $senha==123)
{
    $_SESSION['usuario1'] = ["nome": $cpf, "senha": $senha];
    header("location:../restrito.php");
}
else
{          
    header("location:../index.html?erro=login&senha");
}


?>