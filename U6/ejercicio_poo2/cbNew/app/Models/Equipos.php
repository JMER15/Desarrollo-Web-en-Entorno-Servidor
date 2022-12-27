<?php
namespace App\Models;
use Dotenv;
use PDO;
use PDOException;

class Equipos extends DBAbstractModel
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

    public function getEquipo($name, $db)
    {
        $sql = "SELECT * FROM equipos WHERE equipo like :param1";
        $parametros = array(':param1' => "%$name%");
        $consulta = $db->prepare($sql);
        $consulta->execute($parametros);
        $resultado = $consulta->fetchAll();
        return $resultado;
    }

    public function insertEquipos($data, $db)
    {

        $name = $data['name'];
        $sql = "INSERT INTO equipos (equipo) VALUES (:param1)";
        $parametros = array(':param1' => $name);
        $consulta = $db->prepare($sql);
        $consulta->execute($parametros);
    
    }

    public function updateEquipos($data, $db)
    {
        $sql = "UPDATE equipos SET equipo = :param1 WHERE id = :param2";
    
        $parametros = array(':param1' => $data['newName'], ':param2' => $data['id']);
        $consulta = $db->prepare($sql);
        $consulta->execute($parametros);
    }

    public function deleteEquipos($id, $db)
    {
        $sql = "DELETE FROM equipos WHERE id = :param1";
        $parametros = array(':param1' => $id);
        $consulta = $db->prepare($sql);
        $consulta->execute($parametros);
        
    }

    public function conectaDB()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'./../../');
        $dotenv->load();
        try {
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, $_ENV['DB_USER'],$_ENV['DB_PASSWD']);
            $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            return ($db);
        } catch (PDOException $e) {
            echo "Error conexión";
            exit();
        }
    }

    public function getEquipos($db)
    {
        $sql = "SELECT * FROM equipos";
        $consulta = $db->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll();
        return $resultado;
    }
    
}

?>