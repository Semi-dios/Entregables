<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card p-3">
          <h2>Api Laravel Vue y Clever cloud</h2>
          <br />
          <p>
            Api rest basica que permite la realizacion de Crud por medio de
            laravel , que se consume en componentes de Vue.js:
          </p>

          <h5>Requrimientos:</h5>
          <ul>
            <li>Composer</li>
            <li>Node js</li>
            <li>Laragon , Wamp, Xampp ,Mamp</li>
            <li>Laravel 7^*</li>
            <li>Php 7.14^*</li>
            <li>Mysql</li>
            <li>Apache</li>
          </ul>

          <hr />
          <p>
            En la carpeta raiz de su entorno de desarrollo digite git clone
            <a href=" https://github.com/Semi-dios/Entregables" target="_blank">
              https://github.com/Semi-dios/Entregables</a
            >
            Instale dependencias digitando <b> npm i</b> y luego
            <b>composer i</b> Renombre el archivo <b>.env.example</b> a
            <b>.env</b> Asigne la base de datos prueba y sus credenciales En la
            terminal digite <b> php artisan key:generate</b>
          </p>
          <br />
          <hr />
          <p>A continuacion digite</p>
          <ul>
            <li>php artisan migrate</li>
            <li>php artisan migrate:refresh --seed</li>
          </ul>

          <br />
          <p>
            Al digitar php artisan route:list podra visulizar las rutas actuales
            en este casi ubicadas en config/api.php
          </p>
          <p>
            Inicie servicios digitando php artisan serve -- En una terminal
            diferente digite npm run watch para que se inicie la compilacion del
            webpack (css,js,bootstrap,componentes )
          </p>

          <p>Acceda a la url <a href="">http://127.0.0.1:8000/</a></p>

          <hr />
          <h2>Rutas a usar :</h2>

          <ul>
            <li>
              <a
                href="https://entregables.herokuapp.com/public/#/curriculum "
                target="_blank"
                rel="noopener noreferrer"
                >https://entregables.herokuapp.com/public/#/curriculum</a
              >
            </li>

            <li>
              <a
                href="https://entregables.herokuapp.com/public/#/users "
                target="_blank"
                rel="noopener noreferrer"
                >https://entregables.herokuapp.com/public/#/users</a
              >
            </li>
            <li>
                <a href="https://entregables.herokuapp.com/public/#/users/{id_User}/show" target="_blank" rel="noopener noreferrer">https://entregables.herokuapp.com/public/#/users/{id_User}/show</a>

            </li>
            <li>
                <a href="https://entregables.herokuapp.com/public/#/users/{id_User}/edit" target="_blank" rel="noopener noreferrer">https://entregables.herokuapp.com/public/#/users/{id_User}/edit</a>

            </li>

            <li>
                <a href="https://entregables.herokuapp.com/public/#/products" target="_blank" rel="noopener noreferrer">https://entregables.herokuapp.com/public/#/products</a>
            </li>
            <li>
                <a href="https://entregables.herokuapp.com/public/#/products/create" target="_blank" rel="noopener noreferrer">https://entregables.herokuapp.com/public/#/products/create</a>
            </li>
            <li>
                <a href="https://entregables.herokuapp.com/public/#/products/{id_product}/edit" target="_blank" rel="noopener noreferrer">https://entregables.herokuapp.com/public/#/products/{id_product}/edit</a>
            </li>
            <li>
                <a href="https://entregables.herokuapp.com/public/#/products/{id_product}/show" target="_blank" rel="noopener noreferrer">https://entregables.herokuapp.com/public/#/products/{id_product}/show</a>
            </li>
          </ul>

           <p>
                Estructura El projecto se realizo mediante el consumo de rutas Api o
                end point de Laravel 7 a tra vez de componentes elaborados en vue ,
                por lo tanto las vistas las encontrara en la carpeta
                Resources/js/views , estas a su vez se renderizan por medio del
                archivo routes.js que se ejecuta dentro del archivo resources/main.js
                . Migrations , Seeders and Model.  Actualmente existen 3 modelos
                Product , Company y User usados en la realizacion de la api rest ,
                cada uno tiene una migration y tambien un seeder CompaniesTableSeeder
                ProductsTableSeeder y UsersTableSeeder los cuales generan una
                inserción de datos fake usando factory. Estos a su vez son llamados en
                DatabaseSeeder.
                 Api/UserController, Api/ProductController son usados para la
                ejecucion del Crud por medio de los metodos get , post , put , y
                delete de acuerdo a lo solicitado en el documento .
           </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
* {
  color: #000;
}
</style>
