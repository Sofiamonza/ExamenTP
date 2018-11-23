<?php

namespace ExamenTP;

class Generador {
    protected $cant_preguntas; 
    protected $preguntas = array();
    protected $respuestas_total;
    protected $array_respuestas= array();
    protected $array_descripcion= array();


    public function __construct($yaml, $cantidad_preguntas){
        $this->preguntas=$yaml;
        $this->$cant_preguntas=$cantidad_preguntas;
    }

    /*  
    *  Agrega las respuestas Ninguna de las anteriores y Todas las anteriores
    *
    */
    public function RespuestasGenerales($cant_preguntas){
        for($i=0; $i<$cant_preguntas; $i++ )
        {
            if($this->preguntas[$i]['respuestas_correctas'] == []){
                $this->preguntas[$i]['respuestas_correctas'] = 'Ninguna de las anteriores';
            }

            if($this->preguntas[$i]['respuestas_incorrectas'] == []){
                $this->preguntas[$i]['respuestas_incorrectas'] = array_merge($pregunta[$i]['respuestas_correctas'], $pregunta[$i]['respuestas_incorrectas']);
                $this->preguntas[$i]['respuestas_correctas'] = 'Todas las anteriores';
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
    *  Devuelve un array de todas las descripciones
    *
    */
    public function Pregunta($cant_preguntas){
        for($i=0; $i<$cant_preguntas; $i++ )
        {
            $array[$i]= $this->preguntas[$i]['descripcion'];
          
        }

        return $array;
    } 

    /*  
    *  Elimina preguntas dejando la cantidad de preguntas deseadas
    *
    */
    public function CantPreguntas(){
        return array_slice($this->preguntas, 0, $this->cant_preguntas);                                 
    }

    /*  
    *  Crea un tema, generando una plantilla html
    *
    */
    public function CrearTema($nro_tema, Plantilla $html){
        $this->MezclarPreguntas();
        $this->preguntas = $this->CantPreguntas();
        $this->RespuestasGenerales($this->cant_preguntas);

        $this->$array_descripcion = $this->Pregunta($this->cant_preguntas);

        for($i=0; $i < $this->cant_preguntas; $i++)
        {
            $this->array_respuestas[$i]= $this->RespuestasTotales($this->preguntas[$i]);
        }


        $html->plantilla_alumno($this->$cant_preguntas, $this->$array_respuestas, $this->$array_descripcion, $nro_tema);
        $html->plantilla_profesor($this->preguntas, $this->$cant_preguntas, $nro_tema);

    }

    public function MostrarArrayPreguntas(){
        return $this->preguntas;
    }

} 
