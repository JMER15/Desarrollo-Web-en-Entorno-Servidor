<?php
/**
 * funcion crear tablero y mostrar tablero
 * 
 * @author josemi
 */

function crearTablero($nFilas, $nColumnas, $minas) {
    $tablero = [];
    //inicializar el tablero
    for ($f = 0; $f < $nFilas; $f++) {
        for ($c = 0; $c < $nColumnas; $c++) {
            $tablero[$f][$c] = 0;
        }
    }

    //genereamos posicion de las minas
    for ($x = 0; $x < $minas; $x++) { //importante oner otro indice diferente 

        do {
            $fila = rand(0, $nFilas - 1);
            $columna = rand(0, $nColumnas - 1);
        } while ($tablero[$fila][$columna] == 9); //siempre genera el random cuando sea 9

        $tablero[$fila][$columna] = 9;

        //incrementar las posiciones de al lado de las minas
        for ($i = max(0, ($fila - 1)); $i <= min($fila + 1, $nFilas - 1); $i++) {
            for ($j = max(0, ($columna - 1)); $j <= min($columna + 1, ($nColumnas - 1)); $j++) {
                if ($tablero[$i][$j] != 9) {
                    $tablero[$i][$j]++;
                }
            }
        }
    }

    // var_dump($tablero);
    return $tablero;
}

function mostrarTablero($tablero) {
    foreach ($tablero as $value) {
        echo '</br>';
        foreach ($value as $value2) {
            echo $value2;
            // le paso las keys para saber en que fila y columna estoy
            echo '&nbsp&nbsp'; //espacio en blanco
        }
    }
}

function mostrarTableroVisible() {
    foreach ($_SESSION['tableroVisible'] as $key => $value) {
        echo '<br>';
        foreach ($value as $key2 => $value2) {
            if ($_SESSION['tableroVisible'][$key][$key2] == 0) {
                echo '<a href="index.php?filas=' . $key . '&columnas=' . $key2 . '">' . $value2 . '</a>';
            } else {
                if ($_SESSION['tablero'][$key][$key2] == 0) {
                    echo '*';
                } else {
                    echo $_SESSION['tablero'][$key][$key2];
                }
            }
            // le paso las keys para saber en que fila y columna estoy
            echo '&nbsp&nbsp'; //espacio en blanco
        }
    }
}

function crearTableroCeros($nFilas, $nColumnas) {

    $tablero = [];
    //inicializar el tablero
    for ($f = 0; $f < $nFilas; $f++) {
        for ($c = 0; $c < $nColumnas; $c++) {
            $tablero[$f][$c] = 0;
        }
    }
    return $tablero;
}

//función recursividad
function clickCasilla($f, $c) {

    if ($_SESSION['tablero'][$f][$c] == 9) {
        echo 'Has perdido';
        $_SESSION['tableroVisible'] = $_SESSION['tablero'];
        // si le doy a una mina y me equivoco muestro has perdido con la solución del tablero
    } else {
        $_SESSION['tableroVisible'][$f][$c] = 1;
        $_SESSION['contador']++;
        if ($_SESSION['contador'] == (NUM_FILAS * NUM_COLUMNAS) - NUM_MINAS) {
            echo 'Has ganado';
        } else {
            if ($_SESSION['tablero'][$f][$c] == 0) {
                for ($i = max(0, ($f - 1)); $i <= min($f + 1, NUM_FILAS - 1); $i++) {
                    for ($j = max(0, ($c - 1)); $j <= min($c + 1, (NUM_COLUMNAS - 1)); $j++) {
                        if ($_SESSION['tableroVisible'][$i][$j] == 0) {
                            clickCasilla($i, $j);
                        }
                    }
                }
            }
        }
    }
}

// var_dump($_GET);
