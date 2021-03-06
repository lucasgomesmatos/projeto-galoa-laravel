# Projeto Galoá 🍊

### 🛠 Tecnologias

* Engine Blade do Laravel.
* CSS.

* JavaScript.

* Framework Laravel e PHP.

### 🚀 Para iniciar o projeto

#### Requisitos

* Você precisa ter instalado o PHP 8 ou superior.
* Bando de dados MySql.
* Composer.
* Laravel 8 ou superior.

#### Inicializando

* Clone o projeto para seu repositório local.
* Abre a cmd na pasta raiz do projeto e rode estes comandos.

  ```
  composer install

  npm install

  npm run dev 

  composer dump-autoload

  ```

* Crie um arquivo com a extensão  **.env** ou simplesmente copie e cole do arquivo  **.env.example** .
* Crie um banco de dados com o nome galoa ou de sua preverença, mas lembre-se de colocar no arquivo **.env** o mesmo nome.
* Preencha os dados conforme seu banco de dados.

  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE= /* nome do banco */
  DB_USERNAME= /* usuário do banco */
  DB_PASSWORD= /* senha do banco */
  ```



* Rode o comando para gerar a APP_KEY do Laravel.

  ```
  php artisan key:generate
  ```

* Rode o comando para ligar o servidor ou ligue seu servidor xamp por exemplo.

  ```
  php artisan serve
  ```

<img src="public/assets/images/preview-site.png" />


