<?php
/**
 * 
 * @author josemi
 */
 session_start();
 unset($_SESSION['tablero']);
 session_destroy();
 header('Location: index.php');

 // hago un header location para que me vuelva a dirigir al index principal y asi crear otro tablero con otra sesion
 // Cuando pulso F5 como está guardado en session no me modifica valores ni posiciones de las minas