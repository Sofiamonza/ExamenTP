<?php

namespace ExamenTP;

require '../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$yaml = Yaml::parseFile('material/preguntas.yml');
$yaml = $yaml['preguntas'];

$cantPreguntas = 12;
$generador = new Generador($yaml, $cantPreguntas);
$html = new Plantilla();

$generador->crearTema(1, $html); //crea tema 1

//$generador->crearTema(2, $html); //crea tema 2

