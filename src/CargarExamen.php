<?php


require '../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$yaml = Yaml::parseFile('material/preguntas.yml');
$yaml = $yaml['preguntas'];


$cantPreguntas = 12;
$generador = new Generator($yaml, $cantPreguntas);

$generador->crearTema(1); //crea tema 1

$generador->crearTema(2); //crea tema 2

