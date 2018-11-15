<?php


require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$yaml = Yaml::parseFile('\material\preguntas.yml');
$yaml = $yaml['preguntas'];

