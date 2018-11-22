<?php

class Generador {
    protected $cant_preguntas; 
    protected $preguntas = array();
    protected $respuestas_total;


    public function __construct($yaml, $cant = 10){
        $this->preguntas=$yaml;
        $this->cant=$cant_preguntas;
    }

    public function RespuestasGenerales($cant_preguntas){
        for($i=0; $this->preguntas[$i]<$cant_preguntas; $i++ )
        {
            if($this->preguntas[$i]['respuestas_correctas'] == []){
                array_push($this->preguntas[$i]['respuestas_correctas'], 'Ninguna de las anteriores');
            }

            if($this->preguntas[$i]['respuestas_incorrectas'] == []){
                array_push($this->preguntas[$i]['respuestas_correctas'], 'Todas las anteriores')
            }
        }
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
    public function RespuestasTotales($pregunta){
        $this->respuestas_total = array_merge($pregunta['respuestas_correctas'], $pregunta['respuestas_incorrectas']);
        shuffle($this->respuestas_total);
        return $this->respuestas_total;
    }

    /*  
    *  Devuelve la pregunta
    *
    */
    public function Pregunta($pregunta){
        return $pregunta['descripcion'];
    } 

    public function CantPreguntas(){
        return array_slice($this->pregunta, 0, $this->cant_preguntas);                                 
    }

    public function CrearTema(){
        

    }

    public function RespuestasCorrectas(){

    }

    public function Copia(){
        
    }

} 