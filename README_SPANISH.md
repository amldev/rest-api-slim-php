# API REST EN SLIM PHP

Ejemplo de API REST con micro framework [Slim PHP](http://www.slimframework.com).

![alt text](extras/slim-logo.png "Slim PHP micro framework")

Esta simple API RESTful hecha en Slim version 3, permite operaciones CRUD para administrar entidades como por ejemplo: Usuarios, Tareas y Notas :-)

[![Build Status](https://travis-ci.org/maurobonfietti/rest-api-slim-php.svg?branch=master)](https://travis-ci.org/maurobonfietti/rest-api-slim-php)
[![Test Coverage](https://codeclimate.com/github/maurobonfietti/api-rest-slimphp/badges/coverage.svg)](https://codeclimate.com/github/maurobonfietti/api-rest-slimphp/coverage)
[![Code Quality](https://scrutinizer-ci.com/g/maurobonfietti/api-rest-slimphp/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/maurobonfietti/api-rest-slimphp/?branch=master)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=maurobonfietti_rest-api-slim-php&metric=alert_status)](https://sonarcloud.io/dashboard?id=maurobonfietti_rest-api-slim-php)


También puedes leerlo en inglés [README IN ENGLISH](README.md).

## INSTALACIÓN:

### 1- Clonar el proyecto e instalar dependencias:

```bash
$ git clone https://github.com/maurobonfietti/rest-api-slim-php.git
$ cd rest-api-slim-php
$ cp .env.example .env
$ composer install
```


### 2- Crear una nueva base de datos MySQL. Por ejemplo: "rest_api_slim_php".

Desde la línea de comandos ejecutar:

```bash
$ mysql -e 'CREATE DATABASE rest_api_slim_php;'
```


### 3- Crear la estructura y cargar datos de prueba en la base de datos.

La base de datos se puede actualizar manualmente utilizando el siguiente archivo: [database.sql](app/data/database.sql).

También se puede ejecutar desde la línea de comandos:

```bash
$ mysql rest_api_slim_php < app/data/database.sql
```


### 4- Configurar los datos de conexión con MySQL.

Editar y completar archivo de configuración: `.env`. Por ejemplo:

```
DB_HOSTNAME = '127.0.0.1'
DB_DATABASE = 'rest_api_slim_php'
DB_USERNAME = 'root'
DB_PASSWORD = ''
```


### 5- Configurar variables de entorno opcionales.

Por ejemplo:

```
DISPLAY_ERROR_DETAILS=true
APP_DOMAIN='https://www.yourdomain.com'
USE_REDIS_CACHE=false
REDIS_URL=''
```


## SERVIDOR LOCAL:

Se puede iniciar el servidor web interno de PHP ejecutando:

```bash
$ composer start
```


### NOTA:

Si todo fue bien :sunglasses:, se puede acceder localmente al proyecto ingresando a: 
[Ayuda](http://localhost:8080), 
[Estado](http://localhost:8080/status), 
[Usuarios](http://localhost:8080/api/v1/users), 
[Tareas](http://localhost:8080/api/v1/tasks) y
[Notas](http://localhost:8080/api/v1/notes).

El comando `composer start` sería el equivalente a ejecutar:

```bash
$ php -S 0.0.0.0:8080 -t public public/index.php
```


## DEPENDENCIAS:

### LISTA DE DEPENDENCIAS REQUERIDAS:

- [slim/slim](https://github.com/slimphp/Slim): Micro framework PHP que ayuda a escribir rápidamente aplicaciones y APIs simples pero potentes.
- [respect/validation](https://github.com/Respect/Validation): El motor de validación más impresionante jamás creado para PHP.
- [palanik/corsslim](https://github.com/palanik/CorsSlim): Middleware de intercambio de recursos de origen cruzado (CORS) para PHP Slim.
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv): Carga las variables de entorno de `.env` a `getenv()`, `$_ENV` y `$_SERVER` automágicamente.
- [predis/predis](https://github.com/nrk/predis): Cliente Redis flexible y completo para PHP y HHVM.
- [firebase/php-jwt](https://github.com/firebase/php-jwt): Una biblioteca simple para codificar y decodificar JSON Web Tokens (JWT) en PHP.

### LISTA DE DEPENDENCIAS PARA DESARROLLO:

- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit): Framework para hacer Unit Testing en PHP.
- [phpstan/phpstan](https://github.com/phpstan/phpstan): PHPStan, herramienta de análisis estático para PHP.


## TESTS:

Acceder a la raíz del proyecto y ejecutar los tests PHPUnit con `composer test`.

```bash
PHPUnit 8.0.5 by Sebastian Bergmann and contributors.

...............................................                   47 / 47 (100%)

Time: 1.14 seconds, Memory: 10.00 MB

OK (47 tests, 277 assertions)
```


## DOCUMENTACIÓN:

### IMPORTAR EN POSTMAN:

Toda la información de la API, preparada para descargar y utilizar como colección de postman: [Importar Colección](https://www.getpostman.com/collections/b8493a923ab81ef53ebb).

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/b8493a923ab81ef53ebb)


### AYUDA Y MANUAL DE USO:

Para más información sobre el modo de uso de la API REST, ver la siguiente documentación disponible en [Postman Documenter](https://documenter.getpostman.com/view/1915278/RztfwByr).


## VER ONLINE:

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](http://bit.ly/2DdwKkd)

Ver [demo online](http://bit.ly/2DdwKkd) hosteado en Heroku.
