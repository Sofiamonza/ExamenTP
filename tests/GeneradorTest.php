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

        $this->assertEquals($aux2, $generador->RespuestasTotales($aux[0]));
    }

    
    public function testDescripciones(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];

        $cantPreguntas = 10;
        $generador = new Generador($yaml, $cantPreguntas);

	$aux = $generador->MostrarArrayPreguntas();

	for($i=0; $i < $cantPreguntas; $i++ )
        {
            $array[$i]= $aux[$i]['descripcion'];
          
        }

        $this->assertEquals($array, $generador->Descripciones());
    } 

    
    public function testCantPreguntas(){
        $yaml = Yaml::parseFile('./src/material/preguntas.yml');
        $yaml = $yaml['preguntas'];

        $cantPreguntas = 10;
        $generador = new Generador($yaml, $cantPreguntas);
        
        
        $aux = $generador->CantPreguntas();

        $this->assertEquals(10,count($aux));


    }

    
    public function testCrearTema(){
        
    }

    //No sé sie ste test es necesario
    public function testMostrarArrayPreguntas(){

    }
}
