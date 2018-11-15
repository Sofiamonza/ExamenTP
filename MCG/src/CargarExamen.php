<?php
namespace MCG;

use Symfony\Component\Yaml\Yaml;

$yaml = Yaml::parseFile('material/preguntas.yml');
$yaml = $yaml['preguntas'];

