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
  php bin/console make:entity --regenerate App
  ```

* /angular

* /reactapp

  Gerado por:

  ```
  npx create-react-app reactapp
  yarn add redux react-redux redux-thunk redux-form react-router-dom connected-react-router prop-types lodash
  yarn add bootstrap font-awesome
  yarn start
  npx @api-platform/client-generator http://localhost:8000/api src/
```
  
  

