## Gestor de Viáticos Transparentes

 ** El sistema no pudo ser completado en el tiempo establecido en el Reto de Viajes Transparentes, **
 ** sin embargo su desarrollo continuará con el objetivo de que pueda ser implementado en una univserdiad pública **

El Gestor de Viáticos Transparentes tiene como objetivo el brindar un plataforma informática
para el registro de los viajes realizados por funcionarios de diversas dependencias de gobierno o
instituciones educativas públicas en México.

El sistema se enfoca en dos aspectos:
 1) Facilidad en el registro de la información por parte de los funcionarios, pensando en la emisión de 
	los documentos que requieran los mismos funcionarios.
 2) Acceso a la información por parte de la ciudadanía como parte de la transparencia que debe existir
	en el ejercicio de los recursos

## Dependencias

 * PHP 5.5
 * Laravel 4
 * Composer

## Instalación

 1. Clonar repositorio [samuelmg/viaticos](http://github.com/samuelmg/viaticos)
 2. Ejecutar: composer install
 3. Crear base de datos "viaticos"
 4. Permitir acceso al usuario "vuser" a base de datos "viaticos"
 5. Ejecutra: php artisan migrate:install //Instala sistema de migraciones en base de datos
 6. Ejecutar: php artisan migrate //Crea las tablas en la base de datos

## Ejecución

 * Ejecutar: php artisan serve --host = NOMBRE_HOST --port=8080
 * Abrir página: NOMBRE_HOST:8080

## Demo

[Gestor de Viáticos Transparentes](http://viaticos-c9-samuelmg.c9.io/)

## Equipo

 * [Samuel Mercado Garibay](mx.linkedin.com/pub/samuel-mercado/71/5aa/a2b/)
 * [Hayde Suemi Romo García](mx.linkedin.com/pub/hayde-romo/a5/5b6/6b4)

### Contribuciones

Todas las contribuciones y "pull requests" deberán ser enviadas mediante [samuelmg/viaticos](http://github.com/samuelmg/viaticos)

## Wiki

[Wiki](http://github.com/samuelmg/viaticos/wiki)

### License

El sistema de viajes transparentes es software de código abierto bajo la licencia [GNU GENERAL PUBLIC LICENSE Version 2](http://www.gnu.org/licenses/gpl-2.0.html)
