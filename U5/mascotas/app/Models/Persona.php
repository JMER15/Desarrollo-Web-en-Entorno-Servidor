<?php
/**
 * 
 */

namespace App\Models;
class Persona{
    
    private $nombre;
    private $apellidos;
    private $apellido2;
    
    public function __construct($nombre,$apellidos,$apellido2) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->apellido2 = $apellido2;
    }
}

?>
