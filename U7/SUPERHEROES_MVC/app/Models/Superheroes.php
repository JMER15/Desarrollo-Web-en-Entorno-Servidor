<?php
/**
 * 
 * 
 */

namespace App\Models;

class Superheroes extends DBAbstractModel
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
    private $velocidad;

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

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }

    //Métodos de la clase
    public function get()
    {
        if ($this->nombre != '') {
            $this->query = "SELECT *
            FROM superheroes
            WHERE nombre LIKE :nombre";
            //Cargamos los parámetros.
            $this->parametros["nombre"] = "%" . $this->nombre . "%";
            $this->get_results_from_query();
        }
        if (count($this->rows) == 1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad = $valor;
            }
            $this->mensaje = 'sh encontrado';
        } else {
            $this->mensaje = 'sh no encontrado';
        }

        return $this->rows;
    }

    public function getById(){
        $this->query = "SELECT * FROM superheroes WHERE id = :id";
        $this->parametros["id"] = $this->id;
        $this->get_results_from_query();
        return $this->rows;
    }

    public function getAll()
    {
        $this->query = "SELECT * FROM superheroes";
        $this->get_results_from_query();
        return $this->rows;
    }


    public function set()
    {

        $this->query = "INSERT INTO superheroes (nombre, velocidad) VALUES (:nombre, :velocidad)";
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["velocidad"] = $this->velocidad;
        $this->get_results_from_query();
        $this->mensaje = 'superheroe agregado exitosamente';
    }


    public function edit()
    {
        $this->query = "UPDATE superheroes SET nombre = :nombre, velocidad = :velocidad WHERE id = :id";
        $this->parametros["nombre"] = $this->nombre;
        $this->parametros["velocidad"] = $this->velocidad;
        $this->parametros["id"] = $this->id;
        $this->get_results_from_query();
        $this->mensaje = 'superheroe actualizado exitosamente';
    }


    public function delete()
    {
        $this->query = "DELETE FROM superheroes WHERE id = :id";
        $this->parametros["id"] = $this->id;
        $this->get_results_from_query();
        $this->mensaje = 'superheroe eliminado exitosamente';
    }
}
