<?php
/**
 * 
 * @author josemi
 */

namespace App\Controllers;
use Firebase\JWT\JWT;

class AuthController {

    public function handleRequest()
    {
        // echo 'login';
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'POST':
                $data = (array) json_decode(file_get_contents('php://input'), true);
                $usuario = $data['usuario'];
                $password = $data['password'];
                // return $usuario . ' ' . $password;
                if ($usuario == 'usuario' && $password == 'usuario') {
                    $key = "example_key";
                    $payload = array(
                        "iss" => "contactos.local",
                        "aud" => "contactos.local",
                        "iat" => time(),
                        "nbf" => time(),
                        "exp" => time() + 1200,
                        "data" => array(
                            "id" => 1,
                            "usuario" => "usuario",
                            "password" => "usuario"
                        )
                    );
                    $jwt = JWT::encode($payload, $key, 'HS256');
                    return $jwt;
                } else {
                    echo 'usuario y/o password incorrecto';
                }
                break;
            
            default:
                echo 'method not allowed';
                break;
        }
    }
}

?>