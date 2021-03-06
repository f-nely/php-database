<?php

/*
 * https://www.treinaweb.com.br/blog/o-que-e-pdo-no-php/
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=treinaweb', 'root', '704802');

    var_dump($pdo);
}catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}

