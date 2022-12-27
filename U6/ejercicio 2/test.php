<?php

include_once('config/config.php');
include_once('lib/functions.php');

$db = conectaDB();

// if (isset($_POST['insertar'])) {
//     insertEquipos($_POST['equipo'],$db);
// }

// insertEquipos('Pikachus',$db);   // inserta un equipo
// insertEquipos('Pikachus1',$db);
// insertEquipos('Pikachus2',$db);

// getEquipo('kachus1',$db);  
// getEquipos('Magos',$db);
// getEquipos('Pokemons',$db);

// deleteEquipos(1,$db); // Borra el equipo con id 1

// updateEquipos($data,$db);   // Actualiza el equipo con id 2


var_dump(login('Admin','admin',$db));
var_dump(login('jose','jsoe',$db));
   
?>