<?php
/**
 * Clase contador
 * 
 * @author josemi
 * @version 1.0.0
 */
 class Contador {

    private $valor;
    private static $_contador = 0;
    public function __construct($valor) {
        $this->valor = $valor;
        self::$_contador++;
    }

    public function incrementar() {
        $this->valor++;
    }

    public function mostrar() {
        echo 'Valor: '.$this->valor.'<br/>';
        echo 'Nº de contadores: '.self::$_contador.'<br/>';
    }

 }
