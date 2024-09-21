<?php

require_once('./model/Docente.php');

$docente = new Docente();
$docente->setNombre('Albert');
$docente->setApellidos('Einsten');
$docente->setTarifa(50);
$docente->setHoras(80);

//$docente->imprimirDatos();
$docente->imprimirSueldo();

?>