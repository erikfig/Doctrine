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

