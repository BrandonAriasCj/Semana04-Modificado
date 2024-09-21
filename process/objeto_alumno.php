<?php

require_once('./model/Alumno.php');

$alumno = new Alumno();
$alumno->setNombre('Juan');
$alumno->setApellidos('Perez Sánchez');
$alumno->setNota1(16);
$alumno->setNota2(18);


//$alumno->imprimirDatos();
$alumno->imprimirPromedio();

?>