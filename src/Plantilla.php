<?php
namespace ExamenTP;

class Plantilla {


    public function plantilla_alumno($cant_preguntas, $array_respuestas, $array_descripcion, $nro_tema){
	 echo "<html>
	  <head>
		<title>Exam</title>
		<meta charset='utf-8'>
		<meta name='description' content="">
		<meta name=viewport content='width=device-width, initial-scale=1'>

		<style>
		  .question {
			  border: 1px solid gray;
			  padding: 0.3em;
		  }
		  .number {
			  float: left;
			  margin-right: 0.5em;
			  font-weight: bold;
		  }
		  .options {
			  display: flex;
			  flex-direction: column;
		  }
		  .short {
			  display: grid;
			  grid-template-columns: 1fr 1fr;
			  grid-gap: 1em;
		  }
		  .questions {
			  display: grid;
			  grid-template-columns: 1fr 1fr;
			  grid-gap: 1em 1em;
		  }
		  .header {
			  display: flex;
			  justify-content: space-between;
			  margin-bottom: 1em;
		  }
		  .description {
			  margin-bottom: 0.5em;
			  font-weight: bold;
		  }
		  body {
			font-size: 12px;
		  }
		</style>
	  </head>
	  <body>
		<div class='header'>
		  <strong>Nombre y Apellido _____________________________________________ </strong>
		  <strong>Evaluaci�n n�mero</strong>
		  <strong>Tema:". $nro_tema ." </strong></div><div class='questions'>";

		  for ($i=0,$i<$cant_preguntas, $i++){
		
			"<div class='question'>
				<div class='number'>" echo $i;"</div>
				
			<div class='description'>"echo $array_descripcion;"</div>"
				foreach ($array_respuestas[$i] as $arrayrespuestas[$i]){
					"<div class='options short'>
					<div class='option'>"echo $array_respuestas;"</div>
					</div>"
				}
			
			"</div>"
		  }
		"</div> 
	  </body>
	</html>"
	}

    public function plantilla_profesor($preguntas, $cant_preguntas, $nro_tema){
	 echo "<html>
	  <head>
		<title>Exam</title>
		<meta charset='utf-8'>
		<meta name='description' content="">
		<meta name=viewport content='width=device-width, initial-scale=1'>

		<style>
		  .question {
			  border: 1px solid gray;
			  padding: 0.3em;
		  }
		  .number {
			  float: left;
			  margin-right: 0.5em;
			  font-weight: bold;
		  }
		  .options {
			  display: flex;
			  flex-direction: column;
		  }
		  .short {
			  display: grid;
			  grid-template-columns: 1fr 1fr;
			  grid-gap: 1em;
		  }
		  .questions {
			  display: grid;
			  grid-template-columns: 1fr 1fr;
			  grid-gap: 1em 1em;
		  }
		  .header {
			  display: flex;
			  justify-content: space-between;
			  margin-bottom: 1em;
		  }
		  .description {
			  margin-bottom: 0.5em;
			  font-weight: bold;
		  }
		  body {
			font-size: 12px;
		  }
		</style>
	  </head>
	  <body>
		<div class='header'>
		  <strong>Nombre y Apellido _____________________________________________ </strong>
		  <strong>Evaluaci�n n�mero</strong>
		  <strong>Tema:" .$nro_tema." </strong>
		</div>
		<div class='questions'>;"
		  for (int $i,$i<$cant_preguntas, $i++){
		
			"<div class='question'>
				<div class='number'>" echo $i;"</div>
				"echo $preguntas[$i]['respuestas_correctas'];"
			<div class='description'>"echo $array_descripcion;"</div>"
				
				foreach ($array_respuestas[$i] as $arrayrespuestas[$i]){
					"<div class='options short'>
					<div class='option'>"echo $array_respuestas;"</div>
					</div>"
				}
			
			"</div>"
		  }
		"</div> 
	  </body>
	</html>"}
    }
}
