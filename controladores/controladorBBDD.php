<?php

function registroUsuario($usuarioRegistro){

    $listaDeUsuarios = file_get_contents('usuarios.json');
    $arrayUsuarios = json_decode($listaDeUsuarios, true);
    $arrayUsuarios[] = $usuarioRegistro;
    $todosLosUsuarios = json_encode($arrayUsuarios); 
    file_put_contents('usuarios.json', $todosLosUsuarios);
    header("Location: login.php");
}