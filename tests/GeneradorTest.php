<?php

namespace ExamenTP;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class GeneradorTest extends TestCase{
    
    public function testRespuestasGenerales(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];
      
        $cantidad_preguntas= 10;
        $generador = new Generador($yaml, $cantidad_preguntas);

        $generador->RespuestasGenerales();

        $aux = $generador->MostrarArrayPreguntas();
        $bandera = false;

        for($i=0; $i < $cantidad_preguntas; $i++ )
        {
            if ($aux [$i]['respuestas_correctas']== 'Todas las anteriores')
            {
                $bandera = true;
            }
            if ($aux [$i]['respuestas_correctas']== 'Ninguna de las anteriores')
            {
                $bandera = true;
            }
        }

        $this->assertTrue($bandera);
    }

    public function testMezclarPreguntas(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];

        $cantPreguntas = 10;
        $generador = new Generador($yaml, $cantPreguntas);

        $this->assertNotEquals($yaml, $generador->MezclarPreguntas());
    }

    
    public function testRespuestasTotales(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];

        $cantPreguntas = 10;
        $generador = new Generador($yaml, $cantPreguntas);

        $aux = $generador->MostrarArrayPreguntas();
        $aux2= array_merge($yaml[0]['respuestas_correctas'],$yaml[0]['respuestas_incorrectas']);

        $this->assertEquals($aux2, $generador->RespuestasTotales($aux[0]['preguntas']));
    }

    
    public function testPregunta(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];

        $cantPreguntas = 10;
        $generador = new Generador($yaml, $cantPreguntas);

	$aux = $generador->MostrarArrayPreguntas();

	for($i=0; $i<$this->$cantPreguntas; $i++ )
        {
            $array[$i]= $aux[$i]['descripcion'];
          
        }


    } 

    
    public function testCantPreguntas(){
                                     
    }

    
    public function testCrearTema(){
        
    }
}
