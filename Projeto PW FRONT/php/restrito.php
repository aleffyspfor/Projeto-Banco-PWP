<?php
    if(!isset($_SESSION['usuario']) || !isset($_SESSION['usuario1'])){
        header("location:index.html");
    }
    else if(isset($_SESSION['usuario']))
    {
        header("location:indexAbner.html");
    }
    else
    {
        header("location:indexAleffy.html");
    }
?>