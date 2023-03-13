<?php

namespace App\Controllers;
use App\Models\Contactos;

class ContactosController 
{

    public function handleRequest($ruta)
    {
        // print_r($ruta);
        // echo "<br>";
        // print_r(explode('/', $ruta)); 
        //para comprobar que el explode funciona y son 3 elementos siendo el primero vacío y el segundo y tercero (ruta e id)
        // echo "<br>";
        if (count(explode('/', $ruta)) == 3) {
            // echo 'error';
            $id = explode('/', $ruta);
            $id = $id[2];
        }
        
        $contactos = Contactos::getInstancia();
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET':
                if (isset($id)) {
                    $data['id'] = $id;
                    return json_encode($contactos->get($data));
                } else {
                    return json_encode($contactos->getAll());
                }
                break;

            case 'POST':
                $data = (array) json_decode(file_get_contents('php://input'), true);
                return json_encode($contactos->set($data));
                break;

            case 'DELETE':
                $data = (array) json_decode(file_get_contents('php://input'), true);
                $data['id'] = $id;
                return $contactos->delete($data);
                break;

            case 'PUT':
                $data = (array) json_decode(file_get_contents('php://input'), true);
                $data['id'] = $id;
                return json_encode($contactos->edit($data));

            default:
                echo 'method not allowed';
                break;
        }
    }

}
