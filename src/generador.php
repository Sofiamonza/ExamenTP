<?php

class Generador {
    protected $cant_preguntas; 
    protected $preguntas = array();
    protected $respuestas_total;
    protected $array_respuestas= array();
    protected $array_descripcion= array();


    public function __construct($yaml, $cant = 10){
        $this->preguntas=$yaml;
        $this->cant=$cant_preguntas;
    }

    public function RespuestasGenerales($cant_preguntas){
        for($i=0; $i<$cant_preguntas; $i++ )
        {
            if($this->preguntas[$i]['respuestas_correctas'] == []){
                array_push($this->preguntas[$i]['respuestas_correctas'], 'Ninguna de las anteriores');
            }

            if($this->preguntas[$i]['respuestas_incorrectas'] == []){
                array_push($this->preguntas[$i]['respuestas_correctas'], 'Todas las anteriores');
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
    public function Pregunta($cant_preguntas){
        for($i=0; $i<$cant_preguntas; $i++ )
        {
            $array[$i]= $this->preguntas[$i]['descripcion'];
          
        }

        return $array;
    } 

    public function CantPreguntas(){
        return array_slice($this->preguntas, 0, $this->cant_preguntas);                                 
    }

    public function CrearTema($nro_tema, Plantilla $html){
        $this->preguntas = $this->CantPreguntas();
        $this->MezclarPreguntas();
        $this->RespuestasGenerales($this->cant_preguntas);

        $this->$array_descripcion = $this->Pregunta($this->cant_preguntas);

        for($i=0; $i < $this->cant_preguntas; $i++)
        {
            $this->array_respuestas[$i]= $this->RespuestasTotales($this->preguntas[$i]);
        }


        $html->plantilla_alumno($this->$cant_preguntas, $this->$array_respuestas, $this->$array_descripcion, $nro_tema);
        $html->plantilla_profesor($this->preguntas, $this->$cant_preguntas, $nro_tema);

    }


} 