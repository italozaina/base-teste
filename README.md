# Base de exemplo de servidor em Symfony/API Platform e Aplicações Angular 8 e ReactJS

Estruturação:

* /banco

  Contém o banco de dados em MySQL para teste

* /api

  Gerado por:

  ```shell
  composer create-project symfony/website-skeleton:^4.4 api
  composer require api
  php bin/console doctrine:mapping:import 'App\Entity' annotation --path=src/Entity
  ```

* /angular

* /react

