<?php
/**
 * Created by Erik Figueiredo.
 * Email: falecom@erikfigueiredo.com.br
 * Date: 05/12/14
 * Time: 18:40
 */

require 'vendor/autoload.php';

$isDevMode = true;

$conn = array(
    'driver' => 'pdo_mysql',
    'user'=>'root',
    'password'=>'',
    'dbname'=>'treina_w_doctrine'
);

$doctrine = new WebDevBr\Doctrine\Doctrine($conn, $isDevMode);
$doctrine->setEntitiesDir('./src/App/Entities');

$entityManager = $doctrine->getEntityManager();