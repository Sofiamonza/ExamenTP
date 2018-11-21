<?php

class Generador {
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
      
    }

    /*  
    *  Devuelve todas las respuestas, sean correctas o incorrectas
    *   mezcla las respuestas totales de una pregunta del examen
    *   retorna el examen con las respuestas mezcladas
    */
    public function RespuestasTotales(){
        $this->respuestas_total = array_merge($this->preguntas['respuestas_correctas'], $this->preguntas['respuestas_incorrectas']);
        shuffle($this->respuestas_total);
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

    public function CrearTema(){


    }

} 