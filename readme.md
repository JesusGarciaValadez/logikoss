<p align="center"><img src="http://logikoss.com/assets/images/logikoss_logo.png"></p>

## Sobre la prueba

Esta prueba está desarrollada en un entorno MacOS 10.13.5 con [Laravel Homestead](https://laravel.com/docs/5.6/homestead) virtualizado con [VirtualBox](https://www.virtualbox.org/). Para el entorno de pruebas se utilizaron las siguientes tecnologías:
- [Rutas](https://laravel.com/docs/routing).
- [Eloquent](https://laravel.com/docs/eloquent).
- [Migraciones](https://laravel.com/docs/migrations).
- [Queues](https://laravel.com/docs/queues).
- [Task scheduling](https://laravel.com/docs/5.6/scheduling).

Además, las siguientes tecnologías se utilizaron para el desarrollo por lo para tener el mismo entorno, es necesario implementarlas.
- [Laravel Horizon](https://laravel.com/docs/5.6/horizon).
- [Browser Tests (Laravel Dusk)](https://laravel.com/docs/5.6/dusk).

## Primeros pasos

Lo primero es descargar el repositorio. Una vez que tengamos el repositorio, hay que descargar las dependencias de Composer con __"composer install"__.

Ya con las dependencias de Composer, tenemos que copiar el contenido del archivo __".env.example"__ y pegarlo en un nuevo archivo __".env"__. Dentro de este archivo tenemos que poner las variables correspondientes a nuestro entorno de desarrollo. Esto incluye la creación de una base de datos y la asociación o creación de un usuario a la misma.

Es importante también crear las siguientes variables en el archivo __".env"__ ya que son importantes para que la aplicación pueda funcionar correctamente.

- __"GITHUB_CONNECTION=main"__
- __"GITHUB_TOKEN="__
- __"GITHUB_METHOD=token"__

La variable __"GITHUB_TOKEN"__ necesita un OAuth Personal Token válido para que pueda accederse a la API de Github.

Ya que esté creada la base de datos y se hayan configurado las variables de entorno se deben realizar las siguientes tareas:
- Generar una llave de encriptación con el comando __"php artisan key:generate"__
- Ejecutar las migraciones con el comando __"php artisan migrate"__.
- Y poblar la base de datos con con el comando __"php artisan db:seed"__.

Con eso la aplicación esta configurada para trabajar correctamente. Sin embargo, es posible actualizar la información de la base de datos cada hora. Para eso, es necesario configurar una conexión de [__"Redis"__](https://laravel.com/docs/5.6/redis). Dicha conexión sirve para dar de alta una [cola de redis](https://laravel.com/docs/5.6/queues) llamada __"work"__. Para que esa cola se mantenga activa, se recomienda usar [__"Supervisor"__](https://laravel.com/docs/5.6/queues#supervisor-configuration). Además, es necesario dar de alta un crobjob para la ejecución de [tareas calendarizadas](https://laravel.com/docs/5.6/scheduling).

Además, se incluyen varios formatos de code coverage para su posterior lectura.

Para cualquier duda, por favor comunicarse al correo [jesus.garciav@me.com](mailto:jesus.garciav@me.com).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
