<?php
/**
 * ficheros
 * 
 * @author JoseMi
 * @version 1.0.0
 */

 //lectura
//  $file = fopen('poema.txt','r');
//  while (!feof($file)) {
//     $linea = fgets($file).'<br/>';
//     echo $linea;
//  }
//  fclose($file);

 $file = fopen('poema.txt','r');
 $file1 = fopen('POEMA.txt','w');
 while (!feof($file)) {
    $linea = fgets($file);
    $text = strtoupper($linea);
    fwrite($file1,$text);
 }
 fclose($file);
 fclose($file1);
?>