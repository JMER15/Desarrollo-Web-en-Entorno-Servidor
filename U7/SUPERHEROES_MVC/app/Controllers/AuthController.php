<?php

namespace App\Controllers;
use App\Models\Usuario;

class AuthController extends BaseController
{

    public static function getLogin($user, $password)
    {
        $usuario = Usuario::getInstancia();
        $usuario->setUser($user);
        $usuario->setPassword($password);
        $data = $usuario->login($user, $password);
        if ($data) {
            $_SESSION['user'] = $usuario->getRows()[0]['user'];
            $_SESSION['id'] = $usuario->getRows()[0]['id'];
            $_SESSION['perfil'] = "autorizado";
            header('Location: /');
        } else {
            $_SESSION['error'] = "Usuario o contraseña incorrectos";
            header('Location: /');
        }
    }

}

?>