<?php

session_start();

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if($cpf == "111.111.111-11" && $senha=="123")
{
    $_SESSION['abner'] = ["nome"=> $cpf, "senha"=> $senha];
    header("location:./restrito.php");
}
else if($cpf == "222.222.222-22" && $senha=="123")
{
    $_SESSION['aleffy'] = ["nome"=> $cpf, "senha"=> $senha];
    header("location:./restrito.php");
}
else
{          
    header("location:../index.html?erro=login&senha");
}


?>