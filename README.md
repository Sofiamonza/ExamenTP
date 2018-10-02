# ExamenTP
[![Build Status](https://travis-ci.org/Sofiamonza/ExamenTP.svg?branch=master)](https://travis-ci.org/Sofiamonza/ExamenTP)
[![Coverage Status](https://coveralls.io/repos/github/Sofiamonza/ExamenTP/badge.svg?branch=master)](https://coveralls.io/github/Sofiamonza/ExamenTP?branch=master)

- Poder crear multiples temas, entre 3 a 8 temas. Que genere multiples temas
- Que me guarde cuál es la respuesta correcta proque este sistema mezcla las opciones, mezcla las preguntas y las consignas. - - Este sistema me tiene que generar dos copias por cada tema, una sin la resolución y otra con las respuestas correctas.

- Hacer un sistema que tome esa entrada yml y que aggarre un subconjunto de las preguntas. Que las mezcle y mezcle las opciones y me genere tantos temas como yo quiera.

- Quiero que este sistema me de la opción de que agarre opciones. Cuando sean dos, que me diga que la respuesta puede ser la a y b o la b y la c pero que me diga las respuestas. Osea si a y b son correctas, que aparezca una opcion con una combinacion de ambas.
- Que "todas las anteriores" como respuesta sea opcional. 
- Y si "ninguna de las anteriores" me parece inconsistente con las demás opciones, que sea posible cambiarlo.

## Lo que necesitamos y lo que debe haber.
- Objeto tipo examen obj, tipo pregunta y otro html.

- php

- Synfony Yaml -> permite leer archivos yml

- twig -> una biblioteca que le permite escribir una especia de plantilla que se convierte en html
"<h1>{{text}}</h1>"

- css grid

<b>solo tenemos que generar el html, no el pdf</b>

- Si hay un corchete vacio es porque ninguna es la correcta-> osea es: Ninguna de las anteriores

- Como los div son contenedores genéricos. Si yo los muestros a todos como display grid puedo hacer 2 columnas

border 1px solid black


