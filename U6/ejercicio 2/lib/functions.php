<?php
function conectaDB()
{
    try {
        $db = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
        return ($db);
    } catch (PDOException $e) {
        echo "Error conexión";
        exit();
    }
}

function getEquipo($name, $db)
{
    $sql = "SELECT * FROM equipos WHERE equipo like :param1";
    $parametros = array(':param1' => "%$name%");
    $consulta = $db->prepare($sql);
    $consulta->execute($parametros);
    $resultado = $consulta->fetchAll();
    if (!$resultado) {
        echo 'error en la consulta';
    } return $resultado;
}

function getEquipos($db)
{
    $sql = "SELECT * FROM equipos";
    $consulta = $db->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
    if (!$resultado) {
        echo 'error en la consulta';
    } return $resultado;
}

function deleteEquipos($id, $db)
{
    $sql = "DELETE FROM equipos WHERE id = :param1";
    $parametros = array(':param1' => $id);
    $consulta = $db->prepare($sql);
    $consulta->execute($parametros);
    
}

function insertEquipos($name, $db)
{
    $sql = "INSERT INTO equipos (equipo) VALUES (:param1)";
    $parametros = array(':param1' => $name);
    $consulta = $db->prepare($sql);
    $consulta->execute($parametros);

}

function updateEquipos($data, $db)
{
    $sql = "UPDATE equipos SET equipo = :param1 WHERE id = :param2";

    $parametros = array(':param1' => $data['newName'], ':param2' => $data['id']);
    $consulta = $db->prepare($sql);
    $consulta->execute($parametros);
}

function login($usuario,$password,$db){

    $sql = "SELECT * FROM usuarios WHERE usuario = :param1 AND password = :param2";
    $parametros = array(':param1' => $usuario, ':param2' => $password);
    $consulta = $db->prepare($sql);
    $consulta->execute($parametros);
    $resultado = $consulta->fetchAll();
    return $resultado;

}

