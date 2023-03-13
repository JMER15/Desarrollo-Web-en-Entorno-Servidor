<?php

namespace App\Models;

require_once("DBAbstractModel.php");

class Usuario extends DBAbstractModel
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

    //Propiedades del objeto
    private $id;
    private $nombre;
    private $user;
    private $password;

    //getters y setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    //Métodos de la clase
    public function get(){}

    public function set(){}


    public function edit(){}

    public function delete() {}

    public function login($nombre, $password)
    {
        $this->query = "SELECT * FROM usuarios WHERE nombre = :nombre AND password = :password";
        $this->parametros['nombre'] = $nombre;
        $this->parametros['password'] = $password;
        $this->get_results_from_query();
        if (count($this->rows) == 1) {
            $this->mensaje = "Usuario logueado";
            return true;
        } else {
            $this->mensaje = "Usuario no logueado";
            return false;
        }
    }
    public function getRows()
    {
        return $this->rows;
    }
}


?>
