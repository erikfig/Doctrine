# Instalador Doctrine

Esta lib simplesmente configura o Doctrine 2.4.* e retorna o EntityManager, very ease.

```sh
use WebDevBr\Doctrine\Doctrine;

$isDevMode = true;

$conn = array(
    'driver' => 'pdo_mysql',
    'user'=>'root',
    'password'=>'',
    'dbname'=>'dbname'
);

$doctrine = new Doctrine($conn, $isDevMode);
$doctrine->setEntitiesDir('./src/App/Entities')

$entityManager = $doctrine->getEntityManager();
```

Super simples né.

***

Se você precisar usar Doctrine via linhas de comando, de uma olhada nos arquivos bootstrap.php e cli-config.php.

O arquivo pode editar o bootstrap.php para remeter os dados da sua conexão e pronto, apenas incluir no seu projeto.

O arquivo cli-config.php é um pré-requisito do Doctrine para usar via linha de comando (terminal, cmd...).

É isso ai, qualquer coisa estamos por ai.

Att. Erik
[WebDevBr](http://www.webdevbr.com.br)
