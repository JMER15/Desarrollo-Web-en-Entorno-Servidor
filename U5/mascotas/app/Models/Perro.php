<?php
/**
 * 
 */
namespace App\Models;
class Perro {

    private $color;
    private $nombre;
    private $habilidad;
    private $sociablidad;

    public function __construct($nombre,$color) {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->habilidad = 0;
        $this->sociablidad = 5;
    }

    public function entrenar() {
        echo "<br>Dar la pata<br/>";
        if ($this->habilidad<=100) {
            $this->habilidad++;
        }
    }

    public function darPata() {
        $retorno = "<br>¿cómo";
        if ($this->habilidad>5) {
            $retorno = "levanta pata";
        }
        echo $retorno;
    }



}

?>