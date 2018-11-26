[![Build Status](https://travis-ci.org/Sofiamonza/ExamenTP.svg?branch=master)](https://travis-ci.org/Sofiamonza/ExamenTP)
[![Coverage Status](https://coveralls.io/repos/github/Sofiamonza/ExamenTP/badge.svg?branch=master)](https://coveralls.io/github/Sofiamonza/ExamenTP?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Sofiamonza/ExamenTP/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Sofiamonza/ExamenTP/?branch=master)

# Integrantes: Gilio, Monza.

# ExamenTP: Generador de exámenes multiple-choice

- Genera múltiples temas.

- Mezcla las opciones y las consignas.

- Genera dos copias por cada tema, una sin la resolución para el alumno y otra con las respuestas correctas para el profesor.

- Crea un conjunto grande de preguntas, del cual saca para los diferentes temas.

- Agrega las opciones "Todas las anteriores" y "Ninguna de las anteriores" de ser necesario.

# Modo de uso

Para poder generar un tema nuevo, debe agregarse una linea en el archivo CargarExamen.php que sea $generador->CrearTema(nrodetema). Ejecutar "composer install" en la carpeta ExamenTP. Luego en la terminal posicionada en la carpeta src ejecutar el archivo CargarExamen.php de la siguiente manera: php CargarExamen.php.

Esto generara dos archivo html, uno es el examen para el alumno, otro es el examen con las respuestas correctas para el profesor. 

# Limitaciones
- Se genera en la terminal, deben copiarse manualmente el codigo correspondiente a cada prueba y pegarse en un archivo html.
- El código de a prueba y su copia se generan al mismo tiempo, así que uno debe ver cuando termina el código de una y cuando empieza el código de la otra.

