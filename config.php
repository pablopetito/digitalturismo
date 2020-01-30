<?php
    session_start();
    function miAutocarga($nClase)
    {
        require_once 'clases/'.$nClase.'.php';

    }
    
    spl_autoload_register('miAutocarga');
    if (!isset($_SESSION["email"])) {
        if (isset($_COOKIE["email"]) && isset($_COOKIE["nombre"]) && isset($_COOKIE["facebook"]) && isset($_COOKIE["twitter"]) && isset($_COOKIE["instagram"]) && isset($_COOKIE["avatar"])) {
            
            $_SESSION["email"] = $_COOKIE["email"];
            $_SESSION["nombre"] = $_COOKIE["nombre"];
            $_SESSION["facebook"] = $_COOKIE["facebook"];
            $_SESSION["twitter"] = $_COOKIE["twitter"];
            $_SESSION["instagram"] = $_COOKIE["instagram"];
            $_SESSION["avatar"] = $_COOKIE["avatar"];

        }
    }