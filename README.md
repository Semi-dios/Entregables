Api Laravel Vue y Clever cloud
Api rest basica que permite la realizacion de Crud por medio de laravel , que se consume en componentes de Vue.js:

Clonar repo
Requrimientos

Composer
Node js
Laragon , Wamp, Xampp ,Mamp
Laravel 7^*
Php 7.14^*
Mysql
Apache
En la carpeta raiz de su entorno de desarrollo digite git clone https://github.com/Semi-dios/Entregables
Instale dependencias digitando npm i y luego composer i
Renombre el archivo .env.example a .env
Asigne la base de datos prueba y sus credenciales
En la terminal digite php artisan key:generate

A continuacion digite
    1. php artisan migrate 
    2. php artisan migrate:refresh --seed

Al digitar php artisan route:list podra visulizar las rutas actuales en este casi ubicadas en config/api.php

Inicie servicios digitando php artisan serve -- En una terminal diferente digite npm run watch para que se inicie la compilacion del webpack (css,js,bootstrap,componentes )

Acceda a la url http://127.0.0.1:8000/


Rutas a usar : 

https://entregables.herokuapp.com/public/#/curriculum


https://entregables.herokuapp.com/public/#/users
https://entregables.herokuapp.com/public/#/users/{id_User}/show
https://entregables.herokuapp.com/public/#/users/{id_User}/edit


https://entregables.herokuapp.com/public/#/products
https://entregables.herokuapp.com/public/#/products/create
https://entregables.herokuapp.com/public/#/products/{id_product}/edit
https://entregables.herokuapp.com/public/#/products/{id_product}/show




Estructura
El projecto se realizo mediante el consumo de rutas Api o end point de  Laravel 7  a tra vez de componentes elaborados en vue , por lo tanto las vistas las encontrara en la carpeta Resources/js/views , estas a su vez se renderizan por medio del archivo routes.js que se ejecuta dentro del archivo resources/main.js .

Migrations , Seeders and Model
Actualmente existen 3 modelos , Product , Company y User usados en la  realizacion de la api rest , cada uno tiene una migration y tambien un seeder CompaniesTableSeeder ProductsTableSeeder y UsersTableSeeder los cuales generan una inserción de datos fake usando factory. Estos a su vez son llamados en DatabaseSeeder.

En el modelo aplique la proteccion fillable

Controladores
Api/UserController, ProductController son usados para la ejecucion del Crud por medio de los metodos get , post , put , y delete de acuerdo a lo solicitado en el documento .
