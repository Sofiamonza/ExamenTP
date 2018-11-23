<?php

namespace ExamenTP;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class GeneradorTest extends TestCase{
    
    public function testRespuestasGenerales(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];
      
        $cantidad_preguntas=10;
        $generador = new Generador($yaml, $cantidad_preguntas);

        $generador->RespuestasGenerales();

        $aux = $generador->MostrarArrayPreguntas();
        $bandera = false;

        for($i=0; $i < $cant; $i++ )
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

        $this->assertTrue($generador->MezclarPreguntas());

        $this->assertNotEquals($yaml, $generador->MostrarArrayPreguntas());
    }

    
    public function testRespuestasTotales(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];

        $cantPreguntas = 10;
        $generador = new Generador($yaml, $cantPreguntas);

        $aux = $generador->MostrarArrayPreguntas();
        $aux2= array_merge($yaml[0]['respuestas_correctas'],$yaml[0]['respuestas_incorrectas']);

        $this->assertEquals($aux2, $generador->RespuestasTotales($aux[0]));
    }

    
    public function testPregunta(){
        
    } 

    
    public function testCantPreguntas(){
                                     
    }

    
    public function testCrearTema(){
        
    }
}
