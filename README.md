# H+Http Client Api PHP

Esse client foi construído em PHP para a realização para se conectar a API Hubmais.
Aqui vamos mostrar como é facil a instalação e utilização.

## Requisitos

* php (versão 7.2 ou >=8.1)
* composer (mais recente)


## Instalação

O plugin pode ser adicionado a seu projeto com o comando abaixo:

```shell
composer require hubmais/h-http-client
```

***

## Exemplos de uso


```php
<?php

use Hubmais\HHttpClient\Client;

$client = new Client('<endpoint>');
$client->setMarketplaceId('');
$client->setSellerId('');
$client->setToken('');

$client->request()->get('/metodo ...')

```
