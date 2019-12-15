<?php

function dbDeUsuarios() {

    $listaDeUsuarios = file_get_contents('usuarios.json');
    return json_decode($listaDeUsuarios, true);
  
  }

function registroUsuario($usuarioRegistro){
    $arrayUsuarios = dbDeUsuarios();
    $arrayUsuarios[] = $usuarioRegistro;
    $todosLosUsuarios = json_encode($arrayUsuarios); 
    file_put_contents('usuarios.json', $todosLosUsuarios);
    header("Location: login.php?registro=ok");
}

function buscarUsuario($login){
    $error =[];
    $arrayUsuarios = dbDeUsuarios();
    foreach ($arrayUsuarios as $usuario) {
        if ($login["email"] == $usuario["email"]) {
            if (password_verify($login["password"], $usuario["password"])) {
                    $_SESSION["email"] = $usuario["email"];
                    $_SESSION["nombre"] = $usuario["nombre"];
                    $_SESSION["facebook"] = $usuario["facebook"];
                    $_SESSION["instagram"] = $usuario["instagram"];
                    $_SESSION["twitter"] = $usuario["twitter"];
                    $_SESSION["avatar"] = $usuario["avatar"];
                    header("Location: index.php");
                break;
            }else{
                 $error["password"] = "Password incorrecta, intente nuevamente";
                return $error;
            }
        }
    }
    $error["email"] = "El email ingresado no se encuentra registrado";
    return $error;

}

 