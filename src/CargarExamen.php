<?php


require '../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$yaml = Yaml::parseFile('material/preguntas.yml');
$yaml = $yaml['preguntas'];

$cantTemas = 4; //por poner un ejemplo.
$cantPreguntas = 12;
$generador = new Generator($yaml, $cantPreguntas);

$generador->crearTema($cantTemas);

