<?php

namespace App\Models;

// use App\Models\DBAbstractModel;

class Usuarios extends DBAbstractModel
{

    public function __clone()
    {
        trigger_error('La clonación no está permitida.',E_USER_ERROR);
    }

    private static $instancia;
    public static function getInstancia()
    {
        if(!isset(self::$instancia)){
            $miClase = __CLASS__;
            self::$instancia = new $miClase;
        }
        return self::$instancia;
    }

    //getters y setters
    private $id;
    private $nombre;
    private $user;
    private $psw;
    private $email;
    private $perfil;
    private $bloqueado;
   

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

    public function getPsw()
    {
        return $this->psw;
    }

    public function setPsw($psw)
    {
        $this->psw = $psw;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPerfil()
    {
        return $this->perfil;
    }

    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    public function getBloqueado()
    {
        return $this->bloqueado;
    }

    public function setBloqueado($bloqueado)
    {
        $this->bloqueado = $bloqueado;
    }

    //métodos

    public function get()
    {
        $this->query = "SELECT * FROM usuarios";
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getById()
    {
        $this->query = "SELECT * FROM usuarios WHERE id=:id";
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
        $result = $this->rows;
        return $result;
    }

    public function getByLogin()
    {
        $this->query = "SELECT * FROM usuarios WHERE user=:user AND
        psw=:psw";
        $this->parametros['user'] = $this->user;
        $this->parametros['psw'] = $this->psw;
        $this->get_results_from_query();
        $result = $this->rows;
        return $result;
    }

    public function getByUser()
    {
        $this->query = "SELECT * FROM usuarios WHERE user=:user";
        $this->parametros['user'] = $this->user;
        $this->get_results_from_query();
        $result = $this->rows;
        return $result;
    }

    public function getByEmail()
    {
        $this->query = "SELECT * FROM usuarios WHERE email=:email";
        $this->parametros['email'] = $this->email;
        $this->get_results_from_query();
        $result = $this->rows;
        return $result;
    }

    protected function set()
    {
        $this->query = "INSERT INTO usuarios (nombre, user, psw, email, perfil, bloqueado)
        VALUES (:nombre, :user, :psw, :email, :perfil, :bloqueado)";
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['user'] = $this->user;
        $this->parametros['psw'] = $this->psw;
        $this->parametros['email'] = $this->email;
        $this->parametros['perfil'] = $this->perfil;
        $this->parametros['bloqueado'] = $this->bloqueado;
        $this->get_results_from_query();
        $this->mensaje = 'Usuario agregado exitosamente';
    }

    protected function edit()
    {
        $this->query = "UPDATE usuarios SET nombre=:nombre, user=:user, psw=:psw, email=:email, perfil=:perfil, bloqueado=:bloqueado WHERE id=:id";
        $this->parametros['id'] = $this->id;
        $this->parametros['nombre'] = $this->nombre;
        $this->parametros['user'] = $this->user;
        $this->parametros['psw'] = $this->psw;
        $this->parametros['email'] = $this->email;
        $this->parametros['perfil'] = $this->perfil;
        $this->parametros['bloqueado'] = $this->bloqueado;
        $this->get_results_from_query();
        $this->mensaje = 'Usuario modificado exitosamente';
    }

    protected function delete()
    {
        $this->query = "DELETE FROM usuarios WHERE id=:id";
        $this->parametros['id'] = $this->id;
        $this->get_results_from_query();
        $this->mensaje = 'Usuario eliminado exitosamente';
    }

    //login usuario
    public function login()
    {
        $result = $this->getByLogin();
        if(count($result) > 0){
            foreach($result as $res){
                $_SESSION['id'] = $res->id;
                $_SESSION['nombre'] = $res->nombre;
                $_SESSION['user'] = $res->user;
                $_SESSION['email'] = $res->email;
                $_SESSION['perfil'] = $res->perfil;
                $_SESSION['bloqueado'] = $res->bloqueado;
            }
            $this->mensaje = 'Usuario logueado exitosamente';
        }else{
            $this->mensaje = 'Usuario o contraseña incorrectos';
        }
    }

}
