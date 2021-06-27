# controle-cliente

Sistema para controle de clientes e boletos de diversos produtos

  - Listagem de clientes
  - Geração de boletos com integração do mercadopago

### Tecnologias

Utiliza-se as seguintes tecnologias para o funcionamento desse sistema:

* [Laravel 7.19.0] - Framework PHP
* [Docker] - Administrador de containers
* [Sentry] - Notificação de erros recorrentes

### Pré-requisitos
 - Executando o docker na maquina local
 - Executando o docker-compose na maquina local
 - Conhecimento básico em docker e PHP

### Instalação

Assume que atenda aos pré-requisitos informados acima para seguir com os passos abaixo:

Clonando o repositório

```sh
SSH: $ git clone git@github.com:edujudici/controle-cliente.git
HTTPS: $ git clone https://github.com/edujudici/controle-cliente.git (necessário usuário e senha)
```

Executar o shell script de instalação

```sh
$ ./install-development.sh
```

Os seguintes passos serão executados para o funcionamento do sistema:
 - Buildar e subir os containers
 - Instalação das depencias do projeto
 - Geração da key para o correto funcionamento do Laravel
 - Execução das migrations no banco de dados
 - Execução dos seeders para preenchimento de informações nas tabelas

Incluir a linha abaixo no hosts (/etc/hosts)
```sh
127.0.0.1  test.local
```

### Como acessar

 - Acessando o sistema: [test.local](http://test.local/)
 - Acessando banco de dados [localhost:8089](http://localhost:8089)

### Comandos utéis

 - Start containers
     ```sh
    $ docker-compose up -d
    ```
 - Stop e remove containers
    ```sh
    $ docker-compose down
    ```
  - Instalando depencias
    ```sh
    $ docker-compose exec app composer install
    ```
  - Executando as migrations no banco de dados
    ```sh
    $ docker-compose exec app php artisan migrate
    ```
    
License
----

MIT

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [Laravel 7.19.0]: <https://laravel.com/docs/7.x>
   [Docker]: <https://www.docker.com/>
   [Sentry]: <https://sentry.io/welcome/>
