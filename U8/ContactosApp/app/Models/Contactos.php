<?php
/**
 * 
 */

namespace App\Models;

class Contactos extends DBAbstractModel
{

    /*CONSTRUCCIÓN DEL MODELO SINGLETON*/
    private static $instancia;

    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
    public function __clone()
    {
        trigger_error('La clonación no es permitida!.', E_USER_ERROR);
    }

    //métodos
    public function get($data=array()){
        $id = $data['id'];
        $this->query = "SELECT * FROM contactos WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function set($data=array()){
       
        foreach ($data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "INSERT INTO contactos (nombre, telefono, email) VALUES (:nombre, :telefono, :email)";
        $this->parametros['nombre'] = $nombre;
        $this->parametros['telefono'] = $telefono;
        $this->parametros['email'] = $email;
        $this->get_results_from_query();
        // return $this->rows;

    }

    public function delete($data = array()){
        $id = $data['id'];
        $this->query = "DELETE FROM contactos WHERE id = :id";
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->mensaje;
    }

    public function edit($data = array()){
        foreach ($data as $campo => $valor) {
            $$campo = $valor;
        }
        $this->query = "UPDATE contactos SET nombre = :nombre, telefono = :telefono, email = :email WHERE id = :id";
        $this->parametros['nombre'] = $nombre;
        $this->parametros['telefono'] = $telefono;
        $this->parametros['email'] = $email;
        $this->parametros['id'] = $id;
        $this->get_results_from_query();
        return $this->mensaje;
    }

    public function getAll()
    {
        $this->query = "SELECT * FROM contactos";
        $this->get_results_from_query();
        return $this->rows;
    }

}

?>