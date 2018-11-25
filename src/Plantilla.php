<?php

namespace ExamenTP;

use Twig_Environment;
use Twig_Loader_Filesystem;

class Plantilla {


    public function plantilla_alumno($cant_preguntas, $array_respuestas, $array_descripcion, $nro_tema){

        echo "<html><h1>Tema: " $nro_tema " </h1>"

    }

    public function plantilla_profesor($preguntas, $cant_preguntas, $nro_tema){
        
    }
}
