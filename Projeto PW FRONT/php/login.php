<?php

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

if($cpf == "06599173004" && $senha==123)
{
    header("location:index.html");
}
else if($cpf == "28686773044" && $senha==123)
{
    header("location:indexAleffy.html");
}
else
{          
    header("location:login.html?erro=login&senha");
}


?>