<?php

class Generador /*implements GeneradorInterface*/ {
    protected $cant_preguntas; 
    protected $preguntas = array();
    protected $respuestas_total;


    public function __construct($yaml, $cant = 10){
        $this->preguntas=$yaml;
        $this->cant=$cant_preguntas;
    }

    /*  mezcla las preguntas del examen 
    *   retorna el examen con las preguntas mezcladas
    *
    */
    public function MezclarPreguntas(){
        shuffle($this->preguntas);
        return $this->preguntas;
    }

    /*  mezcla las respuestas de una pregunta del examen
    *   retorna el examen con las respuestas mezcladas
    *
    */
    public function MezclarRespuestas(){
       shuffle($this->preguntas['respuestas_correctas']);
       shuffle($this->preguntas['respuestas_incorrectas']);
        return $this->preguntas;
    }

    /*  
    *  Devuelve todas las respuestas, sean correctas o incorrectas
    *
    */
    public function RespuestasTotales(){
        $this->respuestas_total = array_merge($this->preguntas['respuestas_correctas'], $this->preguntas['respuestas_incorrectas']);
        return $this->respuestas_total;
    }

    /*  
    *  Devuelve la pregunta
    *
    */
    public function Pregunta(){
        return $this->pregunta['descripcion'];
    } 

    public function CantPreguntas(){
        return array_slice($this->pregunta, 0, $this->cant_preguntas);                                 
    }

    public function RespuestasOpcionales(){
        if(!array_key_exists('ocultar_opcion_todas_las_anteriores', $this->pregunta))
        {
           
        }
        else{

        }
    }

} 