<?php
namespace ExamenTP;

class Plantilla {


    public function plantilla_alumno($cant_preguntas, $array_respuestas, $array_descripcion, $nro_tema){
		<html>
			<head>
				<meta charset="UTF-8"/>
				<meta name="viewport" content="with=device-width; initial-sacle=1.0" />
				<title> Examen </title>
			</head>
		
				echo "<h1>Tema: " $nro_tema " </h1>"
				<ul>
				<?php foreach ($arraydescripcion as $array_descripcion): ?>
					<div>
						<li><?php echo $array_descripcion ?></li>
						<li><?php echo $array_respuestas ?></li>
					</div>
				<?php endforeach; ?>

		</html>
	}

    public function plantilla_profesor($preguntas, $cant_preguntas, $nro_tema){
		<html>
			<head>
				<meta charset="UTF-8"/>
				<meta name="viewport" content="with=device-width; initial-sacle=1.0" />
				<title> Examen </title>
			</head>
		
				echo "<h1>Tema: " $nro_tema " </h1>"
				<ul>
				<?php foreach ($arraydescripcion as $array_descripcion): ?>
					<div>
						<li><?php echo $array_descripcion ?></li>
						<li><?php echo $array_respuestas ?></li>
					</div>
				<?php endforeach; ?>

		</html>
	}
    }
}
