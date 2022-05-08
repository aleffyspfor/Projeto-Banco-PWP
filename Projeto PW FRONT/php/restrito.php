<?php

session_start();

    if(!isset($_SESSION['abner']) && !isset($_SESSION['aleffy'])){
        header("location:../index.html");
    }
    else if(isset($_SESSION['abner']))
    {
        header("location:../indexAbner.html");
    }
    else if (isset($_SESSION['aleffy']))
    {
        header("location:../indexAleffy.html");
    }
?>